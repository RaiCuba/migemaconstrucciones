@extends('layouts.menupricipal')
@section('Contenido')
    <input type="text" id="latitud" name="latitud" readonly value="{{ $asis->latitud }}">
    <input type="text" id="longitud" name="longitud" readonly value="{{ $asis->longitud }}">

    <div id="map" style="height: 400px; width: 100%;  margin: 0; padding: 0;"></div>

    <script>
        function initMap() {
            // Crear un mapa
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 0,
                    lng: 0
                },
                zoom: 8
            });

            // Recorrer las coordenadas y mostrar los marcadores en el mapa
            let variable;
            if (variable == null) {
                console.log("es null");
            } else {
                console.log("No es null");
            }

            var marker = new google.maps.Marker({
                position: {
                    lat: {{ $asis->latitud }},
                    lng: {{ $asis->longitud }}
                },
                map: map,
                title: 'Ubicación'
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8zRQX9l73FPPSaDe95eYDSnC-v7PgEH4&callback=initMap" async
        defer></script>
@endsection
