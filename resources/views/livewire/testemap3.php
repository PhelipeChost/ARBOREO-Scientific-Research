<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>UNESP, Campus II - Ilha Solteira</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="{{ url('https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css') }}" rel="stylesheet">
    <script src="{{ url('https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js') }}"></script>
    
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%;}

        @media (max-width: 700px) {
            #map { top: 0; bottom: 0; width: 700px; height: 1080px;}
        }

        .mapboxgl-popup {
        max-width: 400px;
        font:
            12px/20px 'Helvetica Neue',
            Arial,
            Helvetica,
            sans-serif;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibW9uaWtybyIsImEiOiJjbHYwMXM0MncxZnF1MmtvNXU4c252bDltIn0.nOOBwlBljykLvVNd-DT36w';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/monikro/clyzuo21501l001p93cat782b',
        center: [-51.3410, -20.4183],
        zoom: 17
    });

    // Função para transformar os dados da API em formato GeoJSON
    function createGeoJSON(data) {
        return {
            "type": "FeatureCollection",
            "features": data.map(item => ({
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [item.planta.coordenada_o, item.planta.coordenada_s] // Longitude, Latitude
                },
                "properties": {
                    "description": `
                        <strong>Descrição:</strong> ${item.descricao}<br>
                        <strong>Espécie:</strong> ${item.planta.especie.nomeespecie}<br>
                        <strong>Gênero:</strong> ${item.planta.genero.nomegenero}<br>
                        <strong>Família:</strong> ${item.planta.familia.nomefamilia}<br>
                        <strong>Data da Coleta:</strong> ${new Date(item.planta.datacoleta).toLocaleDateString()}<br>
                        <img src="http://inventarioarboreo.feis.unesp.br:8090/inventario/imagens/${item.foto}" alt="Imagem da Planta" style="width:100px;height:100px;">
                    `
                }
            }))
        };
    }

    // Ao carregar o mapa
    map.on('load', function() {
        // Fazendo uma requisição para a API que retorna os dados em JSON
        fetch('http://inventarioarboreo.feis.unesp.br:8090/inventario/imagens')
            .then(response => response.json())
            .then(data => {
                // Transforma os dados da API em GeoJSON
                const geojsonData = createGeoJSON(data);

                // Adiciona os dados GeoJSON como uma fonte no mapa
                map.addSource('places', {
                    'type': 'geojson',
                    'data': geojsonData
                });

                // Quando o usuário clicar em um ponto
                map.on('click', 'places', (e) => {
                    const coordinates = e.features[0].geometry.coordinates.slice();
                    const description = e.features[0].properties.description;

                    // Garante que o popup apareça sobre o ponto correto
                    while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                        coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                    }

                    // Exibe o popup
                    new mapboxgl.Popup()
                        .setLngLat(coordinates)
                        .setHTML(description)
                        .addTo(map);
                });

                // Adiciona uma camada para exibir os pontos
                map.addLayer({
                    'id': 'places',
                    'type': 'circle',
                    'source': 'places',
                    'paint': {
                        'circle-color': 'red',
                        'circle-radius': 6,
                        'circle-stroke-width': 2,
                        'circle-stroke-color': '#ffffff'
                    }
                });
            })
            .catch(error => {
                console.error('Erro ao carregar os dados da API:', error);
            });
    });

    // Adiciona controles de navegação e tela cheia
    map.addControl(new mapboxgl.FullscreenControl({ container: document.querySelector('body') }));
    map.addControl(new mapboxgl.NavigationControl());
</script>


</body>
<script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>

