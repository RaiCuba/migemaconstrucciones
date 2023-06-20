@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("proveedor.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Proveedor</h1>
           

              
              
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control"  name="textnombre" required>
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Organización</label>
                <input type="text" class="form-control"  name="textorganizacion" required>
                <div id="emailHelp" class="form-text"></div>
              </div>
            

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nit </label>
                <input type="text" class="form-control"  name="textnit" required>
                <div id="emailHelp" class="form-text"></div>
              </div>

           <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripción del proveedor</label>
              <input type="text" class="form-control" name="textdescrip" required>
              <div id="emailHelp" class="form-text"></div>
            </div>

            <div >
              <a href="{{ route('proveedor') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection