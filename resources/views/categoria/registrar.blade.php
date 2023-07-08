@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('categoria.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nueva categoria de producto</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">categoria de producto</label>
            <input type="text" class="form-control" name="textnombre" required>
            @error('textnombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion del categoria</label>
            <input type="text" class="form-control" name="textdescrip" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textdescrip')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('categoria') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
