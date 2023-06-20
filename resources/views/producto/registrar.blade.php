@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("producto.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar producto</h1>
           
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Empleado</label>
              <select  name="textempleado" class="form-control" >
                @foreach($empleados as $items)
                <option value="{{ $items->id_emp }}">{{ $items->id_emp }} </option>
                @endforeach
              </select> 

            </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de Producto</label>
                <select  name="textcostoprod" class="form-control" >
                  @foreach($costoprod as $dato)
                  <option value="{{ $dato->id_cos_pro }}">{{ $dato->nombre}}</option>
                  @endforeach
                </select> 
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lugar de almacenamiento</label>
                <select  name="textlugar" class="form-control" >
                  @foreach($lugares as $dato)
                  <option value="{{ $dato->id_lug }}">{{ $dato->almacen}}</option>
                  @endforeach
                </select> 
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad en M3</label>
                <input type="text" class="form-control"  name="textcantidad" required>
                <div id="emailHelp" class="form-text"></div>
              </div>

           <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripción</label>
              <input type="text" class="form-control" name="textdescripcion" required>
              <div id="emailHelp" class="form-text"></div>
            </div>

            <div >
              <a href="{{ route('producto') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection