
@extends('layouts.menupricipal')
@section('Contenido')
<button onclick="obtenerUbicacion()">Obtener Ubicación</button>
  

<script>
    function obtenerUbicacion() {
    // Verificar si el navegador es compatible con la geolocalización
    if (navigator.geolocation) {
        // Obtener la ubicación actual
        navigator.geolocation.getCurrentPosition(registrarUbicacion);
    } else {
        console.log("La geolocalización no está soportada por este navegador.");
    }
}

function registrarUbicacion(position) {
    // Obtener la latitud y longitud de la posición actual
    var latitud = position.coords.latitude;
    var longitud = position.coords.longitude;

    // Enviar los datos al servidor mediante una petición AJAX (puedes usar Axios o la librería de tu elección)
    axios.post('/registrar-ubicacion', {
        latitud: latitud,
        longitud: longitud
    })
    .then(function (response) {
        console.log("Ubicación registrada exitosamente.");
    })
    .catch(function (error) {
        console.log("Error al registrar la ubicación: " + error);
    });
}
</script>



<div id="map"></div>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 0, lng: 0},
            zoom: 8
        });

        // Obtener la ubicación almacenada en la base de datos
        var latitud = {{ $ubicacion->latitud }};
        var longitud = {{ $ubicacion->longitud }};

        // Crear un marcador en la ubicación
        var marker = new google.maps.Marker({
            position: {lat: latitud, lng: longitud},
            map: map,
            title: 'Mi Ubicación'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzeP_8JAdrEQZ1T16yc03DVRhqm3SjZNA&callback=initMap" async defer></script>
@endsection