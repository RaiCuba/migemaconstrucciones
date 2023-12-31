@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif




    <a href="{{ route('formularioentradasalida') }}"><button type="sudmit" class="btn btn-outline-dark">Asignar Hora de
            trabajo de empleado</button> </a>




    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4>Gestionar asistencia entrada y salidad </h4>
            </div>
            <div class="table-responsive">

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Id hora ent sal</th>
                            <th>Hora entrada</th>
                            <th>Hora Salida</th>
                            <th>fecha</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->id_ent_sal }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->hora_ent }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->hora_sal }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha }}</p>
                                </td>


                                <td><a href="{{ route('modificarentradasalida', $items->id_hor_asi) }}"><button
                                            type="sudmit" class="btn btn-secondary">Modificar</button> </a> </td>

                                <td><a href="{{ route('entradasalida.delete', $items->id_hor_asi) }}"><button type="sudmit"
                                            class="btn btn-secondary">Eliminar</button> </a> </td>
            </div>
            </tr>
            @endforeach
            </tbody>
            </table>
            <div class="row">
                <div>
                    {{ $datos->links() }}
                </div>
            </div>

        </div>

    </div>
@endsection
