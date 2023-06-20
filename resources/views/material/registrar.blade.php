@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("material.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Material Bruto y/o Compra</h1>
           
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Proveedor </label>
              <select  name="textproveedor" class="form-control" >
                @foreach($proveedores as $items)
                <option value="{{ $items->id_prov }}">{{ $items->nombre }} </option>
                @endforeach
              </select> 

            </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario que compra</label>
                <select  name="textusuario" class="form-control" >
                  @foreach($usuarios as $dato)
                  <option value="{{ $dato->id }}">{{ $dato->username}}</option>
                  @endforeach
                </select> 
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lugar de Extracción</label>
                <select  name="textextraccion" class="form-control" >
                  @foreach($extraccion as $dato)
                  <option value="{{ $dato->id_lug_ext }}">{{ $dato->lugar}}</option>
                  @endforeach
                </select> 
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad en M3</label>
                <input type="text" class="form-control"  name="textcantidad" required>
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Costo de la materia bruta</label>
                <input type="text" class="form-control"  name="textcosto" required>
                <div id="emailHelp" class="form-text"></div>
              </div>
            

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Material Bruta </label>
                <input type="text" class="form-control"  name="textmaterial" required>
                <div id="emailHelp" class="form-text"></div>
              </div>

           <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Lugar de Almacenamiento para Seleccinar</label>
              <input type="text" class="form-control" name="textlugar" required>
              <div id="emailHelp" class="form-text"></div>
            </div>

            <div >
              <a href="{{ route('material') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection