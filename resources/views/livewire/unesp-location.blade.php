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

    // Função para converter blob em URL para exibir a imagem
    function blobToImageURL(blob) {
        return URL.createObjectURL(blob);
    }

    // Função para formatar os dados no formato GeoJSON
    function formatToGeoJSON(data) {
        const features = data.map(item => ({
            type: 'Feature',
            geometry: {
                type: 'Point',
                coordinates: [item.planta.coordenada_o, item.planta.coordenada_s]
            },
            properties: {
                description: `
                    <strong>Espécie:</strong> ${item.planta.especie.nomeespecie} <br>
                    <strong>Gênero:</strong> ${item.planta.genero.nomegenero} <br>
                    <strong>Família:</strong> ${item.planta.familia.nomefamilia} <br>
                    <strong>Local:</strong> ${item.planta.local.nomelocal} <br>
                    <strong>Descrição:</strong> ${item.descricao} <br>
                    <img src="" id="img-${item.codimagem}" alt="Imagem da planta" style="max-width:100px; max-height:100px;">
                `,
                imgBlob: item.foto, // Armazenamos o blob aqui para carregar depois
                codimagem: item.codimagem
            }
        }));

        return {
            type: 'FeatureCollection',
            features: features
        };
    }

    map.on('load', function() {
        // Requisição para a API de imagens e plantas
        fetch('http://inventarioarboreo.feis.unesp.br:8090/inventario/imagens')
            .then(response => response.json())
            .then(data => {
                // Formata os dados no formato GeoJSON
                const geojsonData = formatToGeoJSON(data);

                // Adiciona a fonte de dados ao mapa
                map.addSource('places', {
                    type: 'geojson',
                    data: geojsonData
                });

                // Adiciona uma camada para mostrar os pontos
                map.addLayer({
                    id: 'places',
                    type: 'circle',
                    source: 'places',
                    paint: {
                        'circle-color': 'red',
                        'circle-radius': 6,
                        'circle-stroke-width': 2,
                        'circle-stroke-color': '#ffffff'
                    }
                });

                // Evento de clique no ponto
                map.on('click', 'places', (e) => {
                    const coordinates = e.features[0].geometry.coordinates.slice();
                    const description = e.features[0].properties.description;
                    const imgBlob = e.features[0].properties.imgBlob;
                    const codimagem = e.features[0].properties.codimagem;

                    // Gera o popup com as informações
                    new mapboxgl.Popup()
                        .setLngLat(coordinates)
                        .setHTML(description)
                        .addTo(map);

                    // Converte o blob em URL da imagem e seta no elemento de imagem
                    fetch(`data:image/jpeg;base64,${imgBlob}`).then(response => response.blob())
                        .then(blob => {
                            const imageUrl = blobToImageURL(blob);
                            document.getElementById(`img-${codimagem}`).src = imageUrl;
                        });
                });

                // Quando o cursor estiver sobre o ponto
                map.on('mouseenter', 'places', () => {
                    map.getCanvas().style.cursor = 'pointer';
                });

                // Quando o cursor sair do ponto
                map.on('mouseleave', 'places', () => {
                    map.getCanvas().style.cursor = '';
                });
            })
            .catch(error => {
                console.error('Erro ao carregar os dados da API:', error);
            });
    });

    // Adiciona controle de navegação e tela cheia
    map.addControl(new mapboxgl.FullscreenControl({container: document.querySelector('body')}));
    map.addControl(new mapboxgl.NavigationControl());
</script>


</body>
<script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>

