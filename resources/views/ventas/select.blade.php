@extends('layouts.menupricipal')
@section('Contenido')
    <select id="pais" name="pais">
        <option value="">Seleccione un país</option>
        @foreach ($paises as $pais)
            <option value="{{ $pais->id_pai }}">{{ $pais->nombre }}</option>
        @endforeach
    </select>

    <select id="ciudad" name="ciudad">
        <!-- Aquí se cargarán las ciudades dependientes -->
    </select>

    <script>
        // Manejar el cambio en el campo de países
        document.getElementById('pais').addEventListener('change', function() {
            var paisId = this.value;
            if (paisId) {
                // Realizar una solicitud Ajax para obtener las ciudades dependientes
                fetch('/obtener-ciudad/' + paisId)
                    .then(response => response.json())
                    .then(data => {
                        var ciudadSelect = document.getElementById('ciudad');
                        ciudadSelect.innerHTML = '';
                        data.forEach(ciudad => {
                            var option = document.createElement('option');
                            option.text = ciudad.nombre;
                            option.value = ciudad.id_dep;
                            ciudadSelect.add(option);
                        });
                    });
            } else {
                // Vaciar el campo de ciudades si no se selecciona ningún país
                document.getElementById('ciudad').innerHTML = '';
            }
        });
    </script>
@endsection
