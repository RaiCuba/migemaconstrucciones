@extends('layouts.menupricipal')
@section('Contenido')

<a href="{{ route('ubi') }}">ubi</a>

<script src="{{ asset('js/axios.min.js') }}"></script>

<form method="POST" action="{{ route('asistencia.registrar') }}">
    @csrf
    <input type="text" name="empleado" placeholder="Empleado" required>
     <input type="hidden" name="latitud" id="latitud" value="">
    <input type="hidden" name="longitud" id="longitud" value="">
    <button type="submit">Registrar Asistencia</button>
    <script>
        window.onload = function(){
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('latitud').value = position.coords.latitude;
                 document.getElementById('longitud').value = position.coords.longitude;
             });
             console.log('entro a la funcion WINDOW');
         };
    </script>
</form>


@endsection


