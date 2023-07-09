@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif
    <a href="{{ route('formulariohoraasig') }}"><button type="sudmit" class="btn btn-outline-dark">Asignar Hora de trabajo de
            empleado</button> </a>

    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4>Gestionar Hora de Trabajo </h4>
            </div>
            <div class="table-responsive">

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Id hora asig</th>
                            <th>Hora entrada a.m.</th>
                            <th>Hora Salida a.m.</th>
                            <th>Hora entrada p.m.</th>
                            <th>Hora Salida p.m.</th>
                            <th>fecha</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->id_hor_asi }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->hora_ent_m }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->hora_sal_m }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->hora_ent_t }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->hora_sal_t }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha }}</p>
                                </td>

                                {{-- <td><a href="{{route('modificarhoraasig', $items->id_hor_asi)}}"><button type="sudmit" class="btn btn-secondary">Modificar</button> </a> </td> --}}
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id_hor_asi }}">Modificar</button>
                                </td>
                                <td><a href="{{ route('horaasig.delete', $items->id_hor_asi) }}"><button type="sudmit"
                                            class="btn btn-secondary">Eliminar</button> </a> </td>
            </div>
            </tr>
            @include('hora_asig.modificar')
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
