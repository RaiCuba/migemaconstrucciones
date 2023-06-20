@extends('layouts.menupricipal')
@section('Contenido')
    

<form id="coordenadasForm" method="POST">
    <label for="latitud">Latitud:</label>
    <input type="text" id="latitud" name="latitud">
    <label for="longitud">Longitud:</label>
    <input type="text" id="longitud" name="longitud">
    <button type="submit">Guardar coordenadas</button>
</form>

<script>
    document.getElementById('coordenadasForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío del formulario por defecto

        // Obtener los valores de latitud y longitud
        var latitud = document.getElementById('latitud').value;
        var longitud = document.getElementById('longitud').value;

        // Enviar una solicitud POST al controlador de Laravel para guardar las coordenadas
        axios.post('{{ route('asis1') }}', {
            latitud: latitud,
            longitud: longitud
        })
        .then(function(response) {
            // Éxito en la solicitud AJAX
            console.log(response.data);
        })
        .catch(function(error) {
            // Error en la solicitud AJAX
            console.error(error);
        });
    });
</script>
@endsection