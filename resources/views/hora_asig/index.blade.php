@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('formulariohoraasig') }}"><button type="sudmit" class="btn btn-outline-dark">Asignar Hora de trabajo
                de
                empleado</button> </a>

    </div>
    <div class="card">
        <div class="card-header">
            <h4>Gestionar Hora de Trabajo </h4>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="ocultar">Id hora asig</th>
                        <th>H. entrada a.m.</th>
                        <th>H. Salida a.m.</th>
                        <th>H. entrada p.m.</th>
                        <th>H. Salida p.m.</th>
                        <th>fecha</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_hor_asi }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->hora_ent_m->format('H:i') }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->hora_sal_m->format('H:i') }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->hora_ent_t->format('H:i') }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->hora_sal_t->format('H:i') }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->fecha->format('d/m/Y') }}</p>
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
@endsection
