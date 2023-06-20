@extends('layouts.menupricipal')
@section('Contenido')
    
@endsection

<!-- Cargar la API de Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzeP_8JAdrEQZ1T16yc03DVRhqm3SjZNA&callback=initMap" async defer></script>

<!-- Div para mostrar el mapa -->
{{-- <div id="map"></div> --}}

<!-- Script para inicializar el mapa -->
{{-- <script>
    function initMap() {
        // Obtener las coordenadas de la asistencia
        var latitud = {{ $asistencia->latitud }};
        var longitud = {{ $asistencia->longitud }};

        // Crear un objeto LatLng con las coordenadas
        var myLatLng = {lat: latitud, lng: longitud};

        // Crear un mapa centrado en las coordenadas
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: myLatLng
        });

        // Agregar un marcador en las coordenadas
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Ubicación de la asistencia'
        });
    }
</script> --}}

<div id="map"></div>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 0, lng: 0},
            zoom: 8
        });

        @foreach($coordenadas as $coordenada)
            var marker = new google.maps.Marker({
                position: {lat: {{ $coordenada->latitud }}, lng: {{ $coordenada->longitud }}},
                map: map,
                title: 'Coordenadas'
            });
        @endforeach
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzeP_8JAdrEQZ1T16yc03DVRhqm3SjZNA&callback=initMap" async defer></script>
@endsection