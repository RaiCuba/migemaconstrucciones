
@extends('layouts.menupricipal')
@section('Contenido')
  

<!-- mostrar mensaje de registro -->
@if (session("Correcto"))

<div class="alert alert-success">{{session("Correcto")}}</div>
  
@endif
@if (session("Error"))

<div class="alert alert-danger">{{session("Error")}}</div>
  
@endif
  



<a href="{{ route("formularioempleado") }}"><button type="sudmit" class="btn btn-outline-dark">Nueva Empleado</button> </a>




<div class="col-12 col-xl-8" >
  <div class="card" >
      <div class="card-header">
          <h4>Gestionar Empleados</h4>
      </div>
          <div class="table-responsive">

              <table class="table table-hover table-lg">
                  <thead>
                      <tr> 
                        <th >Id empleado</th>
                        <th>id persona </th>
                        <th>id tipo empledo </th>
                        <th>id hora de trabajo</th>
                        <th>Observaciones</th>
                        <th>fecha de registro</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ( $datos as $items)
                      <tr>
                        <td class="col-auto">
                          <p class=" mb-0">{{$items->id_emp }}</p>
                      </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{$items->persona->nombre }} {{ $items->persona->ape }}</p>
                        </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{$items->tipo_emp->nombre }}</p>
                      </td>
                          <td class="col-auto">
                              <p class=" mb-0">{{$items->hora_asig->hora_ent_m}} {{ $items->hora_asig->hora_sal_m }} - {{$items->hora_asig->hora_ent_t}} {{ $items->hora_asig->hora_sal_t }}</p>
                          </td>
                          <td class="col-auto">
                            <p class=" mb-0">{{$items->observaciones}}</p>
                        </td>
                          <td class="col-auto">
                            <p class=" mb-0">{{$items->fecha}}</p>
                        </td>
                        <div>
                          <td><a href="{{route('modificarempleado',$items->id_emp)}}"><button type="sudmit" class="btn btn-outline-dark">Modificar</button> </a> </td>
                       
                          <td><a href="{{route("empleado.delete", $items->id_emp)}}"><button type="sudmit" class="btn btn-outline-dark">Eliminar</button> </a> </td>
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