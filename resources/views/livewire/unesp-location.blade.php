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


        .mapboxgl-popup {
        max-width: 400px;
        font:
            12px/20px 'Helvetica Neue',
            Arial,
            Helvetica,
            sans-serif;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            padding-top: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @keyframes zoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }

        .modal-content {
            animation-name: zoom;
            animation-duration: 0.6s;
        }
    </style>
</head>
<body>
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="expandedImage">
</div>

<div id="map"></div>

<!-- Modal para exibir a imagem em tamanho expandido -->
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="expandedImage">
</div>

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
                    <img src="" id="img-${item.codimagem}" alt="Imagem da planta" class="thumbnail" style="max-width:100px; max-height:100px; cursor: pointer;">
                `,
                imgBlob: item.foto,
                codimagem: item.codimagem
            }
        }));

        return {
            type: 'FeatureCollection',
            features: features
        };
    }

    map.on('load', function() {
        fetch('https://cors-anywhere.herokuapp.com/http://inventarioarboreo.feis.unesp.br:8090/inventario/imagens')
            .then(response => response.json())
            .then(data => {
                const geojsonData = formatToGeoJSON(data);
                map.addSource('places', {
                    type: 'geojson',
                    data: geojsonData
                });

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

                map.on('click', 'places', (e) => {
                    const coordinates = e.features[0].geometry.coordinates.slice();
                    const description = e.features[0].properties.description;
                    const imgBlob = e.features[0].properties.imgBlob;
                    const codimagem = e.features[0].properties.codimagem;

                    new mapboxgl.Popup()
                        .setLngLat(coordinates)
                        .setHTML(description)
                        .addTo(map);

                    fetch(`data:image/jpeg;base64,${imgBlob}`).then(response => response.blob())
                        .then(blob => {
                            const imageUrl = blobToImageURL(blob);
                            document.getElementById(`img-${codimagem}`).src = imageUrl;

                            // Adiciona evento para expandir a imagem ao ser clicada
                            document.getElementById(`img-${codimagem}`).addEventListener('click', function() {
                                expandImage(imageUrl);
                            });
                        });
                });

                map.on('mouseenter', 'places', () => {
                    map.getCanvas().style.cursor = 'pointer';
                });

                map.on('mouseleave', 'places', () => {
                    map.getCanvas().style.cursor = '';
                });
            })
            .catch(error => {
                console.error('Erro ao carregar os dados da API:', error);
            });
    });

    // Função para expandir a imagem
    function expandImage(imageUrl) {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("expandedImage");

        modal.style.display = "block";
        modalImg.src = imageUrl;

        // Fecha o modal ao clicar no "x" ou fora da imagem
        document.getElementsByClassName("close")[0].onclick = function() {
            modal.style.display = "none";
        };

        modal.onclick = function() {
            modal.style.display = "none";
        };
    }

    map.addControl(new mapboxgl.FullscreenControl({container: document.querySelector('body')}));
    map.addControl(new mapboxgl.NavigationControl());
</script>

<script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>

