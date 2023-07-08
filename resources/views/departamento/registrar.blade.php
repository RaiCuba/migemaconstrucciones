@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('departamento.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Departamento</h1>

        <label for="exampleInputEmail1" class="form-label">Pais</label>
        <select id="idpais" name="textpais" class="form-control">
            @foreach ($paises as $pais)
                <option value="{{ $pais->id_pai }}">{{ $pais->nombre }}</option>
            @endforeach
        </select>

        <div>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="textdepartamento" name="textdepartamento" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textdepartamento')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>


        <div>
            <a href="{{ route('departamento') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
