@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('tipoact.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Tipo de Actividad</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo de Actividad</label>
            <input type="text" class="form-control" id="texttipoact" name="texttipoact" required>
            <div id="emailHelp" class="form-text"></div>
            @error('texttipoact')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="textdescrip" name="textdescrip" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textdescrip')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('tipoact') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
