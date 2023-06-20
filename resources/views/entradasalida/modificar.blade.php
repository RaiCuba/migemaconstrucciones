@extends('layouts.menupricipal')
@section('Contenido')
  

<form action="{{route("entradasalida.update",$entradasalida->id_ent_sal)}}" method="post">
        @csrf
        @method('PUT')
    
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registro de entrada salida</h1>
          
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Hora de entrado</label>
          <input type="time" class="form-control" name="texthoraent" required value="{{ $entradasalida->hora_ent }}">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Hora de salida</label>
          <input type="time" class="form-control" name="texthorasal" required value="{{ $entradasalida->hora_sal }}">
          <div id="emailHelp" class="form-text"></div>
        </div>
        
        
        <div >
          <a href="{{ route('entradasalida') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
          <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
</form>

@endsection