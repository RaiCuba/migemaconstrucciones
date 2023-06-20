@extends('layouts.menupricipal')
@section('Contenido')
  

<!-- mostrar mensaje de registro -->
@if (session("Correcto"))

<div class="alert alert-success">{{session("Correcto")}}</div>
  
@endif
@if (session("Error"))

<div class="alert alert-danger">{{session("Error")}}</div>
  
@endif
  



<a href="{{ route("formularioempcar") }}"><button type="sudmit" class="btn btn-outline-dark">Asignar nuevo cargo a empleado</button> </a>




<div class="col-12 col-xl-8" >
  <div class="card" >
      <div class="card-header">
          <h4>Gestionar Asignacion de cargos a empleado </h4>
      </div>
          <div class="table-responsive">

              <table class="table table-hover table-lg">
                  <thead>
                      <tr>
                          <th>Id emp car</th>
                          <th>id empleado</th>
                          <th>id cargo </th>
                          <th>Detalle de cargo</th>
                          <th>Fecha de asignación</th>
                          <th>Estado</th>
                          <th>Modificar</th>
                          <th>Eliminar</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ( $datos as $items)
                      <tr>
                          <td class="col-auto">
                              <p class=" mb-0">{{$items->id_emp_car }}</p>
                          </td>
                          <td class="col-auto">
                            <p class=" mb-0">{{ $items->id_emp}}</p>
                        </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{ $items->cargo->nombre}}</p>
                      </td>
                      <td class="col-auto">
                        <p class=" mb-0">{{ $items->descrip}}</p>
                    </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{ $items->fecha}}</p>
                      </td>
                      <td class="col-auto">
                        <p class=" mb-0">{{ $items->estado}}</p>
                   
                        <div>
                          <td><a href="{{route('modificarempcar', $items->id_emp_car)}}"><button type="sudmit" class="btn btn-outline-dark">Modificar</button> </a> </td>
                       
                          <td><a href="{{route("empcar.delete", $items->id_emp_car)}}"><button type="sudmit" class="btn btn-outline-dark">Eliminar</button> </a> </td>
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