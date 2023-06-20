@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("persona.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nueva parsona</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="textnombre" name="textnombre" required value="">
                <div id="emailHelp" class="form-text"></div>
              </div>
    
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="textape" name="textape" required value="">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ci</label>
                <input type="text" class="form-control" name="textci" required value="">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="texttel" required value="">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control"  name="textcorreo" required value="">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                <input type="date" class="form-control"  name="textfecha" required value="">
                <div id="emailHelp" class="form-text"></div>
              </div>

            <div >
              <a href="{{ route('persona') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection