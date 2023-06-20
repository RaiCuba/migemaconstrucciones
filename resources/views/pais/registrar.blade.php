
@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("pais.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo País</h1>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Pais</label>
              <input type="text" class="form-control" id="textpais" name="textpais" required>
              <div id="emailHelp" class="form-text"></div>
            </div>
            
            
            <div >
              <a href="{{ route('pais') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection