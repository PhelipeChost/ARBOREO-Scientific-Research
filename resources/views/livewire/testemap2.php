testemap2.php

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Display a popup on click</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js"></script>
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; margin-top: 50px; margin-bottom: 50px;}
    </style>
</head>
<body>
<style>
    .mapboxgl-popup {
        max-width: 400px;
        font:
            12px/20px 'Helvetica Neue',
            Arial,
            Helvetica,
            sans-serif;
    }
</style>
<div id="map"></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibW9uaWtybyIsImEiOiJjbHYwMXM0MncxZnF1MmtvNXU4c252bDltIn0.nOOBwlBljykLvVNd-DT36w';
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/monikro/clv4qrn7802fv01nufggbcs2l',
        center: [-51.343479, -20.427473],
        zoom: 15
    });

    map.on('load', () => {
        fetch("<?php echo route('features.store'); ?>")
        .then(response => response.json())
        .then(data => {
            // Adicionar as marcações ao mapa
            map.addLayer({
                'id': 'places',
                'type': 'circle',
                'source': {
                    'type': 'geojson',
                    'data': data // Os dados das marcações00
                },
                'paint': {
                    'circle-color': 'lightgreen',
                    'circle-radius': 6,
                    'circle-stroke-width': 2,
                    'circle-stroke-color': '#ffffff'
                }
            });
        })
        .catch(error => {
            console.error('Erro ao carregar as marcações do mapa:', error);
        });

        map.addControl(new mapboxgl.FullscreenControl({container: document.querySelector('body')}));
        map.addControl(new mapboxgl.NavigationControl());
    });

</script>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>