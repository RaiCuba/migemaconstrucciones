@extends('layouts.menupricipal')
@section('Contenido')
  

<form action="{{route("horaasig.update",$horaasig->id_hor_asi)}}" method="post">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Hora de entrado</label>
          <input type="text" class="form-control" name="texthoraent" required value="{{ $horaasig->hora_ent_m }}">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Hora de salida</label>
          <input type="text" class="form-control" name="texthorasal" required value="{{ $horaasig->hora_sal_m }}">
          <div id="emailHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Hora de entrado</label>
          <input type="text" class="form-control" name="texthoraentt" required value="{{ $horaasig->hora_ent_t }}">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Hora de salida</label>
          <input type="text" class="form-control" name="texthorasalt" required value="{{ $horaasig->hora_sal_t }}">
          <div id="emailHelp" class="form-text"></div>
        </div>
        

<div >
  <a href="{{ route('horaasig') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
  <button type="submit" class="btn btn-primary">guardar cambios de horario de empleados</button>
</div>

</form>

@endsection