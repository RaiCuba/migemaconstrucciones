@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('producto.update', $producto->id_pro) }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        @method('PUT')
        <h1 class="modal-title fs-5">Modificar Producto</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de Producto</label>
            <select name="textcostoprod" class="form-control">
                @foreach ($costoprod as $items)
                    <option value="{{ $items->id_cos_pro }}">{{ $items->nombre }} - {{ $items->precio }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lugar de almacenamiento</label>
            <select name="textlugar" class="form-control">
                @foreach ($lugares as $dato)
                    <option value="{{ $dato->id_lug }}">{{ $dato->almacen }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cantidad de producto</label>
            <input type="text" class="form-control" name="textcantidad" required value="{{ $producto->cantidad }}">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="textdescripcion" required value="{{ $producto->descrip }}">
            <div id="emailHelp" class="form-text"></div>
        </div>


        <div>
            <a href="{{ route('producto') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </form>
@endsection
