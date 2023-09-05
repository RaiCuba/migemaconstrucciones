@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('ciudad.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Ciudad</h1>



        <div class="col-md-4">
            <label for="exampleInputEmail1" class="form-label">Pais</label>
            <select name="parametro1" id="parametro1" class="form-control" onchange="cargar(this)">
                <option value="">seleccione un país</option>
                @foreach ($datos as $opcio)
                    <option value="{{ $opcio->id_pai }}">{{ $opcio->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label for="opcion" class="form-label">Departamento</label>
            <select name="depa" id="depa" class="form-control">

                <option value="">seleccione un deparamentos</option>

            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ciudad / provincia</label>
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
    <script>
        function cargar(select1) {
            let ids = select1.value;
            fetch(`pais/${ids}/depa`)
                .then(function(response) {
                    return response.json();
                })
                .then(function(jsonDatos) {
                    cargarproductos(jsonDatos);
                })
        }

        function cargarproductos(jsonProductos) {
            let selectprod = document.getElementById('depa');
            clearSelect(selectprod);
            jsonProductos.forEach(function(pro) {
                let optionTag = document.createElement('option');
                optionTag.value = pro.id_dep;
                optionTag.innerHTML = pro.nombre;
                selectprod.append(optionTag);
            })
        }

        function clearSelect(sel) {
            while (sel.options.length > 1) {
                sel.remove(1);
            }
        }
    </script>
@endsection
