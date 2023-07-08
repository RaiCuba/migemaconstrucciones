@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('cargo.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Cargo</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="textnombre" placeholder="Nombre del cargo"
                value="{{ old('textnombre') }}">
            <div id="emailHelp" class="form-text"></div>
            @error('textnombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion del cargo</label>
            <input type="text" class="form-control" name="textdescrip" placeholder="Ingrese descripcion del cargo"
                value="{{ old('textdescrip') }}">
            <div id="emailHelp" class="form-text"></div>
            @error('textdescrip')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('cargo') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
