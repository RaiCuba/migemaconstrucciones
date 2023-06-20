@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("tipoemp.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Tipo de Empleado</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo de empleado</label>
                <input type="text" class="form-control" id="texttipoemp" name="texttipoemp" required>
                <div id="emailHelp" class="form-text"></div>
              </div>
            
            
            <div >
              <a href="{{ route('tipoemp') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection