@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('cargo.update', $cargo->id_car) }}" method="post">
        @csrf
        @method('PUT')

        <h1 class="modal-title fs-5">Modificar Cargo</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="textnombre" required value="{{ $cargo->nombre }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion del cargo</label>
            <input type="text" class="form-control" name="textdescrip" required value="{{ $cargo->descrip }}">
            <div id="emailHelp" class="form-text"></div>
        </div>


        <div>
            <a href="{{ route('cargo') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">guardar cambios de cargo</button>
        </div>

    </form>
@endsection
