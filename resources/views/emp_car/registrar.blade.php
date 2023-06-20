@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("empcar.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Asignar cargo a empleado</h1>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Empleado</label>
              <select  name="textempleado" class="form-control" >
                @foreach($empleados as $dato)
                <option value="{{ $dato->id_emp }}">{{ $dato->persona->nombre}} {{ $dato->persona->ape }}</option>
                @endforeach
              </select> 
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Cargo</label>
              <select  name="textcargo" class="form-control" >
                @foreach($cargos as $dato)
                <option value="{{ $dato->id_car }}">{{ $dato->nombre}}</option>
                @endforeach
              </select> 
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripción del cargo</label>
              <input type="text" class="form-control" name="textdescrip" required>
              <div id="emailHelp" class="form-text"></div>
            </div>
            
            <div >
              <a href="{{ route('empcar') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection