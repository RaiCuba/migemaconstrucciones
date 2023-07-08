@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('entradasalida.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registro de entrada salida</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hora de entrado</label>
            <input type="time" class="form-control" name="texthoraent" required>
            <div id="emailHelp" class="form-text"></div>
            @error('texthoraent')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hora de salida</label>
            <input type="time" class="form-control" name="texthorasal" required>
            <div id="emailHelp" class="form-text"></div>
            @error('texthorasal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>


        <div>
            <a href="{{ route('entradasalida') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
