@extends('layouts.menupricipal')
@section('Contenido')
    <select id="pais">
        <option value="">Seleccione una opción</option>
        @foreach ($product as $tex)
            <option value="{{ $tex->id_pro }}">{{ $tex->costo_pro->nombre }}</option>
        @endforeach

    </select>
    <div class="form-group">
        <label for="departamento">Departamento:</label>
        <select id="departamento" name="ciudad_id" class="form-control">
            <option value="">Seleccione una ciudad</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">total</label>
        <input type="text" class="form-control" id="resultado" name="resultado" required>
        <div id="emailHelp" class="form-text"></div>
    </div>
    <br>
    <input type="text" id="campoTexto" readonly>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




    <script>
        const campoTexto = document.getElementById('resultado');
        $(document).ready(function() {
            $('#pais').on('change', function() {
                var paisId = $(this).val();
                $.ajax({
                    url: 'getDatos',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        pais_id: paisId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#resultado').empty();
                        $.each(response, function(key, pro) {
                            campoTexto.value = pro - > descrip;
                        });

                    }
                });
            });
        });
    </script>
@endsection
