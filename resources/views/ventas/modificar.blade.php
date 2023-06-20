@extends('layouts.menupricipal')
@section('Contenido')
  


          <form action="{{route("ventas.update",$ventas->id_det_ven )}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            @method('PUT')
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Modificar Ventas</h1>
           

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">uusario</label>
              <select  name="textusuario" class="form-control" >
                @foreach($usuarios as $dato)
                <option value="{{ $dato->id_usu }}">{{ $dato->id_usu }}</option>
                @endforeach
              </select> 
            </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">numero de venta</label>
                <input type="text" class="form-control"  name="textnumero" required value="{{ $ventas->venta->nro }}">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Producto</label>
                <select  name="textusuario" class="form-control" >
                  @foreach($productos as $dato)
                  <option value="{{ $dato->id_pro }}">{{ $dato->costo_prod->nombre }}</option>
                  @endforeach
                </select> 
              </div>



              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="text" class="form-control"  name="textcantidad" required value="{{ $ventas->cantidad }}">
                <div id="emailHelp" class="form-text"></div>
              </div>
            

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio </label>
                <input type="text" class="form-control"  name="textprecio" required value="{{ $ventas->precio }}">
                <div id="emailHelp" class="form-text"></div>
              </div>

           <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripción</label>
              <input type="text" class="form-control" name="textdescrip" required value="{{ $ventas->descrip}}">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">total</label>
              <input type="text" class="form-control" name="texttotal" required  value="{{ $ventas->total}}" >
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div >
              <a href="{{ route('ventas') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
@endsection