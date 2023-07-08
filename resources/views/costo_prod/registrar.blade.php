@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('costoprod.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf

        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Costo de producto</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select name="textcategoria" class="form-control">
                @foreach ($categorias as $dato)
                    <option value="{{ $dato->id_cat }}">{{ $dato->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" name="textnombre" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textnombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio</label>
            <input type="text" class="form-control" name="textcostoprod" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textcostoprod')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div>
            <a href="{{ route('costoprod') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
