@extends('layouts.menupricipal')
@section('Contenido')
  

<!-- mostrar mensaje de registro -->
@if (session("Correcto"))

<div class="alert alert-success">{{session("Correcto")}}</div>
  
@endif
@if (session("Error"))

<div class="alert alert-danger">{{session("Error")}}</div>
  
@endif
  



<a href="{{ route("formularioproducto") }}"><button type="sudmit" class="btn btn-outline-dark">Nuevo Producto</button> </a>




<div class="col-12 col-xl-8" >
  <div class="card" >
      <div class="card-header">
          <h4>Gestionar Producto</h4>
      </div>
          <div class="table-responsive">

              <table class="table table-dark table-hover">
                  <thead>
                      <tr> 
                        <th>Id Categoria</th>
                        <th>Id producto</th>
                        <th>Nombre de producto </th>
                        <th>Precio por M3 </th>
                        <th>Cantidad M3 </th>
                        <th>Descripcion del producto</th>
                        <th>Estado</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ( $datos as $items)
                      <tr>
                        <td class="col-auto">
                          <p class=" mb-0">{{$items->costo_pro->categorium->nombre}} </p>
                      </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{$items->id_pro}}</p>
                      </td>
                    </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{$items->costo_pro->nombre}}</p>
                      </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{$items->costo_pro->precio}} </p>
                      </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{$items->cantidad}}</p>
                        </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{$items->descrip}}</p>
                      </td>
                          <td class="col-auto">
                              <p class=" mb-0">{{$items->estado}}</p>
                          </td>
                          
                        <div>
                          <td><a href="{{route('modificarproducto',$items->id_pro)}}"><button type="sudmit" class="btn btn-secondary">Modificar</button> </a> </td>
                       
                          <td><a href="{{route("producto.delete", $items->id_pro)}}"><button type="sudmit" class="btn btn-secondary">Eliminar</button> </a> </td>
                        </div>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
              <div class="row">
                <div >
                  {{ $datos->links() }}
                </div>
              </div>
              
          </div>
      
</div>

@endsection