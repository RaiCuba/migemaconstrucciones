@extends('layouts.menupricipal')
@section('Contenido')
  

<!-- mostrar mensaje de registro -->
@if (session("Correcto"))

<div class="alert alert-success">{{session("Correcto")}}</div>
  
@endif
@if (session("Error"))

<div class="alert alert-danger">{{session("Error")}}</div>
  
@endif
<a href="{{ route("formulariolugarext") }}"><button type="sudmit" class="btn btn-outline-dark">Registrar lugar de extracción</button> </a>

<div class="col-12 col-xl-8" >
  <div class="card" >
      <div class="card-header">
          <h4>Gestionar lugar de extraccion de material</h4>
      </div>
          <div class="table-responsive">

              <table class="table table-dark table-hover">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Lugar</th>
                          <th>descripción</th>
                          <th>Modificar</th>
                          <th>Eliminar</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ( $datos as $items)
                      <tr>
                          <td class="col-auto">
                              <p class=" mb-0">{{$items->id_lug_ext }}</p>
                          </td>
                          <td class="col-auto">
                            <p class=" mb-0">{{ $items->lugar}}</p>
                        </td>
                        <td class="col-auto">
                          <p class=" mb-0">{{ $items->descrip}}</p>
                      </td>
                     
                        <div>
                          <td><a href="{{route('modificarlugarext', $items->id_lug_ext)}}"><button type="sudmit" class="btn btn-secondary">Modificar</button> </a> </td>
                       
                          <td><a href="{{route("lugarext.delete", $items->id_lug_ext)}}"><button type="sudmit" class="btn btn-secondary">Eliminar</button> </a> </td>
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