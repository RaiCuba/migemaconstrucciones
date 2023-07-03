@extends('layouts.menupricipal')
@section('Contenido')


<form action="{{ route('registrar.asistencia') }}" method="post">
    @csrf
    <!-- otros campos del formulario -->
  
    <input type="hidden" name="latitud" id="latitud">
    <input type="hidden" name="longitud" id="longitud">
    <input type="hidden" name="empleado" value="{{ auth()->user()->id}}">
  
    <button type="button" onclick="obtenerUbicacion()">Obtener Coordenadas</button>
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






{{-- <form method="POST" action="{{ route('guardar.coordenadas') }}" >
    @csrf
    <input type="text" name="empleado" placeholder="Empleado" required>
    <input type="text" name="entradasalida" placeholder="entrada salida" required>
    <input type="text" name="latitud" id="latitud" value="">
    <input type="text" name="longitud" id="longitud" value="">
    <button type="submit"  onclick="obtenerUbicacion()">Registrar Asistencia</button>
    
</form>   --}}

{{-- 
<p>Latitud: <span id="latitud"></span></p>
<p>Longitud: <span id="longitud"></span></p>

<form action="{{ route('registrar.asistencia') }}" method="POST">
    <button id="registrarAsistenciaBtn">Registrar Asistencia</button>


    <input type="text" name="empleado" placeholder="Empleado" required>
    <input type="text" name="entradasalida" placeholder="entrada salida" required>
</form>

<script>
    document.getElementById('registrarAsistenciaBtn').addEventListener('click', function() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var latitud = position.coords.latitude;
          var longitud = position.coords.longitude;
    
          document.getElementById('latitud').textContent = latitud;
          document.getElementById('longitud').textContent = longitud;
    
          // Enviar las coordenadas a Laravel
          var formData = new FormData();
          formData.append('latitud', latitud);
          formData.append('longitud', longitud);
    
          fetch('/registrar-asistencia', {
            method: 'POST',
            body: formData
          })
          .then(response => response.json())
          .then(data => {
            alert(data.message); // Mensaje de respuesta desde el servidor
          })
          .catch(error => {
            console.error('Error al enviar las coordenadas:', error);
          });
        });
      } else {
        alert('Tu navegador no admite la geolocalización.');
      }
    });
    </script> --}}

@endsection


