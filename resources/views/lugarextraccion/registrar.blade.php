@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('lugarext.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Lugar extraccion de material</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">lugar de extraccion de material</label>
            <input type="text" class="form-control" name="textlugar" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textlugar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion del lugar</label>
            <input type="text" class="form-control" name="textdescrip" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textdescrip')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <div>
            <a href="{{ route('lugarext') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
