@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("compramaterial.update",$compramaterial->id_mat )}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            @method('PUT')
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Modificar Compra de material</h1>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Id Usuario</label>
              <input type="text" class="form-control"  name="textidusu" required value="">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Proveedor</label>
              <select  name="textproveedor" class="form-control" >
                @foreach($proveedores as $dato)
                <option value="{{ $dato->id_prov }}">{{ $dato->nombre}}</option>
                @endforeach
              </select> 
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Proveedor</label>
              <select  name="textlugar" class="form-control" >
                @foreach($lugares as $dato)
                <option value="{{ $dato->id_lug_ext }}">{{ $dato->nombre}}</option>
                @endforeach
              </select> 
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre material</label>
              <input type="text" class="form-control"  name="textnombre" required value="{{ $compramaterial->nombre }}">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Lugar de compra</label>
              <input type="text" class="form-control"  name="textlugar" required value="{{ $compramaterial->lugar }}">
              <div id="emailHelp" class="form-text"></div>
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad en M3</label>
                <input type="text" class="form-control"  name="textcantidad" required value="{{ $compramaterial->cantidad }}">
                <div id="emailHelp" class="form-text"></div>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">C Costo del material</label>
                <input type="text" class="form-control"  name="textcosto" required value="{{ $compramaterial->costo }}">
                <div id="emailHelp" class="form-text"></div>
              </div>

            <div >
              <a href="{{ route('compramaterial') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection