@extends('layouts.menupricipal')
@section('Contenido')

<!-- mostrar mensaje de registro -->
@if (session("Correcto"))

<div class="alert alert-success">{{session("Correcto")}}</div>
  
@endif
@if (session("Error"))

<div class="alert alert-danger">{{session("Error")}}</div>
  
@endif
  



<a href="{{ route("formulariocargo") }}"><button type="sudmit" class="btn btn-outline-dark">Nuevo Cargo de empleado</button> </a>




<div class="col-12 col-xl-8" >
  <div class="card" >
      <div class="card-header">
          <h4>Gestionar cargo de empleado</h4>
      </div>
          <div class="table-responsive">

              <table class="table table-dark table-hover">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>nombre</th>
                          <th>descrip</th>
                          <th>Modificar</th>
                          <th>Eliminar</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ( $datos as $items)
                      <tr>
                          <td class="col-auto">
                              <p class=" mb-0">{{$items->id_car }}</p>
                          </td>
                          <td class="col-auto">
                            <p class=" mb-0">{{ $items->nombre}}</p>
                        </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{ $items->descrip}}</p>
                      </td>
                        <div>
                          <td><a href="{{route('modificarcargo', $items->id_car)}}"><button type="sudmit" class="btn btn-secondary">Modificar</button> </a> </td>
                       
                          <td><a href="{{route("cargo.delete", $items->id_car)}}"><button type="sudmit" class="btn btn-secondary">Eliminar</button> </a> </td>
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