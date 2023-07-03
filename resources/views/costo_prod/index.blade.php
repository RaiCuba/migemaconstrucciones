

@extends('layouts.menupricipal')
@section('Contenido')
  
  

<!-- mostrar mensaje de registro -->
@if (session("Correcto"))

<div class="alert alert-success">{{session("Correcto")}}</div>
  
@endif
@if (session("Error"))

<div class="alert alert-danger">{{session("Error")}}</div>
  
@endif
  



<a href="{{ route("formulariocostoprod") }}"><button type="sudmit" class="btn btn-outline-dark">Nuevo Costo de producto</button> </a>




<div class="col-12 col-xl-8" >
  <div class="card" >
      <div class="card-header">
          <h4>Gestionar Pais</h4>
      </div>
          <div class="table-responsive">

              <table class="table table-dark table-hover">
                  <thead>
                      <tr>
                          <th>Id costo de producto</th>
                          <th>id categoria</th>
                          <th>nombre</th>
                          <th>precio</th>
                          <th>fecha</th>
                          <th>Modificar</th>
                          <th>Eliminar</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ( $datos as $items)
                      <tr>
                          <td class="col-auto">
                              <p class=" mb-0">{{$items->id_cos_pro }}</p>
                          </td>
                          <td class="col-auto">
                            <p class=" mb-0">{{ $items->id_cat}}</p>
                        </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{ $items->nombre}}</p>
                      </td>
                      <td class="col-auto">
                        <p class=" mb-0">{{ $items->precio}}</p>
                    </td>
                    <td class="col-auto">
                      <p class=" mb-0">{{ $items->fecha}}</p>
                  </td>
                        <div>
                          <td><a href="{{route("modificarcostoprod", $items->id_cos_pro)}}"><button type="sudmit" class="btn btn-secondary">Modificar</button> </a> </td>
                       
                          <td><a href="{{route("costoprod.delete", $items->id_cos_pro)}}"><button type="sudmit" class="btn btn-secondary">Eliminar</button> </a> </td>
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