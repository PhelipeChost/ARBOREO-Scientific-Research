<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Display a popup on click</title>
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
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/monikro/clyzuo21501l001p93cat782b',
        center: [-51.3410, -20.4183],
        zoom: 17
    });

    map.on('load', function() {
    // Faça uma solicitação AJAX para o seu controlador Laravel que retorna os dados GeoJSON
    const featureRoute = "{{ route('features.store') }}";
    fetch(featureRoute)
        .then(response => response.json())
        .then(data => {
            // Adicione os dados GeoJSON como uma fonte de dados para o mapa
            map.addSource('places', {
                'type': 'geojson',
                'data': data // Os dados GeoJSON retornados pelo controlador
            });

            map.on('click', 'places', (e) => {
            // Copy coordinates array.
            const coordinates = e.features[0].geometry.coordinates.slice();
            const description = e.features[0].properties.description;

            // Ensure that if the map is zoomed out such that multiple
            // copies of the feature are visible, the popup appears
            // over the copy being pointed to.
            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }

            new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(description)
                .addTo(map);
            });

            // Adicione uma camada ao mapa para exibir as marcações
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
            console.error('Erro ao carregar os dados GeoJSON:', error);
        });
    });

    map.addControl(new mapboxgl.FullscreenControl({container: document.querySelector('body')}));
    map.addControl(new mapboxgl.NavigationControl());

</script>

</body>
<script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>

