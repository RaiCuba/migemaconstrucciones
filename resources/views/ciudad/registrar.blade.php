@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('ciudad.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Ciudad</h1>


        <div class="form-group">
            <label for="pais">País:</label>
            <select id="pais" name="pais_id" class="form-control">
                <option value="">Seleccione un país</option>
                @foreach ($datos as $pai)
                    <option value="{{ $pai->id_pai }}">{{ $pai->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="departamento">Departamento:</label>

            <select id="departamento" name="ciudad_id" class="form-control">

            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ciudad</label>
            <input type="text" class="form-control" name="textciudad" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textciudad')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('ciudad') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registar ciudad</button>
        </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pais').on('change', function() {
                var paisId = $(this).val();
                $.ajax({
                    url: '/getDepartamentos/',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        pais_id: paisId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#departamento').empty();
                        $.each(response, function(key, departamento) {
                            $('#departamento').append('<option value="' + departamento
                                .id_dep + '">' + departamento.nombre + '</option>');

                        });
                    }
                });
            });
        });
    </script>
@endsection
