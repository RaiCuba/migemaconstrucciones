@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("horaasig.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Horarios de empleado</h1>
            <h3 class="modal-title fs-5" id="modalRegistrarpais">Horario de la Mañana</h3>
          
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
            <h3 class="modal-title fs-5" id="modalRegistrarpais">Horario de la tarde</h3>
          
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Hora de entrado</label>
              <input type="time" class="form-control" name="texthoraentt" required>
              <div id="emailHelp" class="form-text"></div>
              @error('texthoraentt')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Hora de salida</label>
              <input type="time" class="form-control" name="texthorasalt" required>
              <div id="emailHelp" class="form-text"></div>
              @error('texthorasalt')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <div >
              <a href="{{ route('horaasig') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection