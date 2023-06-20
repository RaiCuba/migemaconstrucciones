@extends('layouts.menupricipal')
@section('Contenido')
  

<form action="{{route("lugarext.update",$lugar->id_lug_ext)}}" method="post">
        @csrf
        @method('PUT')
    
            <h1 class="modal-title fs-5" >Modificar Lugar de extraccion de material</h1>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">almacen de producto</label>
              <input type="text" class="form-control" name="textlugar" required value="{{ $lugar->lugar}}">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripcion del lugar</label>
              <input type="text" class="form-control" name="textdescrip" required value="{{ $lugar->descrip }}">
              <div id="emailHelp" class="form-text"></div>
            </div>
            

<div >
  <a href="{{ route('lugar') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
  <button type="submit" class="btn btn-primary">guardar cambios del lugar</button>
</div>

</form>

@endsection