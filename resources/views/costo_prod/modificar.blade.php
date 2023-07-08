@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('costoprod.update', $costoprod->id_cos_pro) }}" method="post">
        @csrf
        @method('PUT')
        <h1 class="modal-title fs-5">Modificar Costo de producto</h1>

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
            <input type="text" class="form-control" name="textnombre" required value="{{ $costoprod->nombre }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio</label>
            <input type="text" class="form-control" name="textcostoprod" required value="{{ $costoprod->precio }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div>
            <a href="{{ route('costoprod') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">guardar cambios costo de producto</button>
        </div>

    </form>
@endsection
