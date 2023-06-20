
@extends('layouts.menupricipal')
@section('Contenido')
  
  

<form action="{{route("categoria.update",$categoria->id_cat)}}" method="post">
        @csrf
        @method('PUT')
    
            <h1 class="modal-title fs-5" >Modificar Categoria</h1>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">categoria de producto</label>
              <input type="text" class="form-control" name="textnombre" required value="{{ $categoria->nombre }}">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripcion del cargo</label>
              <input type="text" class="form-control" name="textdescrip" required value="{{ $categoria->descrip }}">
              <div id="emailHelp" class="form-text"></div>
            </div>
            

<div >
  <a href="{{ route('categoria') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
  <button type="submit" class="btn btn-primary">guardar cambios de Categoria</button>
</div>

</form>

@endsection