@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("persona.update",$persona->id_per )}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            @method('PUT')
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Modificar datos de persona</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="textnombre" name="textnombre" required value="{{ $persona->nombre }}">
                <div id="emailHelp" class="form-text"></div>
              </div>
    
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="textape" name="textape" required value="{{ $persona->ape }}">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ci</label>
                <input type="text" class="form-control" name="textci" required value="{{ $persona->ci }}">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="texttel" required value="{{ $persona->tel }}">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control"  name="textcorreo" required value="{{ $persona->correo}}">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                <input type="text" class="form-control"  name="textfecha" required value="{{ $persona->fecha_nac }}">
                <div id="emailHelp" class="form-text"></div>
              </div>

            <div >
              <a href="{{ route('persona') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection