@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('registrar.asistencia') }}" method="post">
        @csrf
        <!-- otros campos del formulario -->

        <input type="hidden" name="latitud" id="latitud">
        <input type="hidden" name="longitud" id="longitud">
        <input type="hidden" name="empleado" value=9>

        <button class="btn btn-outline-dark" type="button" onclick="obtenerUbicacion()">REGISTRO DE ASISTENCIA</button>
    </form>

    <script>
        function obtenerUbicacion() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitud = position.coords.latitude;
                    var longitud = position.coords.longitude;

                    document.getElementById('latitud').value = latitud;
                    document.getElementById('longitud').value = longitud;

                    // Envía el formulario
                    document.querySelector('form').submit();
                });
            } else {
                alert('Tu navegador no admite la geolocalización.');
            }
        }
    </script>
@endsection
