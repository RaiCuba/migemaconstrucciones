@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif




    <a href="{{ route('formularioempleado') }}"><button type="sudmit" class="btn btn-outline-dark">Nueva Empleado</button>
    </a>




    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4>Gestionar Empleados</h4>
            </div>
            <div class="table-responsive">

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Id empleado</th>
                            <th>Empleado </th>
                            <th>Tipo de empleado </th>
                            <th>Horario de trabajo</th>
                            <th>Observaciones</th>
                            <th>fecha de registro</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->id_emp }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->persona->nombre }} {{ $items->persona->ape }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->tipo_emp->nombre }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">H. a.m.: {{ $items->hora_asig->hora_ent_m->format('H:i:s') }} /
                                        {{ $items->hora_asig->hora_sal_m->format('H:i:s') }} - H. a.m.:
                                        {{ $items->hora_asig->hora_ent_t->format('H:i:s') }} /
                                        {{ $items->hora_asig->hora_sal_t->format('H:i:s') }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->observaciones }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha }}</p>
                                </td>
                                <div>
                                    <td><a href="{{ route('modificarempleado', $items->id_emp) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td>

                                    {{-- <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#modalEditar{{ $items->id_emp }}">Modificar</button>
                                    </td> --}}
                                    <td><a href="{{ route('empleado.delete', $items->id_emp) }}"><button type="sudmit"
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
