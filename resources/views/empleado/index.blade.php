@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif
    <div class="">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('formularioempleado') }}"><button type="sudmit" class="btn btn-outline-dark">Nueva
                    Empleado</button>
            </a>
        </div>

        <h4>Gestionar Empleados</h4>
        <div class="card">



            <div class="table-responsive">

                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th class="ocultar">Id empleado</th>
                            <th>Empleado </th>
                            <th>Tipo de empleado </th>
                            <th>Horario de trabajo</th>
                            <th>Observaciones</th>
                            <th>fecha de registro</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_emp }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->persona->nombre }} {{ $items->persona->ape }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->tipo_emp->nombre }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->hora_asig->hora_ent_m->format('H:i') }} /
                                        {{ $items->hora_asig->hora_sal_m->format('H:i') }} -
                                        {{ $items->hora_asig->hora_ent_t->format('H:i') }} /
                                        {{ $items->hora_asig->hora_sal_t->format('H:i') }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->observaciones }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha->format('d-m-Y') }}</p>
                                </td>

            </div>
            <div>
                <td><a href="{{ route('modificarempleado', $items->id_emp) }}"><button type="sudmit"
                            class="btn btn-secondary">Modificar</button> </a> </td>

                {{-- <td><button type="button" class="btn btn-secondary" id="moBoton"
                                        onclick="cargarDatosModificar('{{ $items->id_emp }}')" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id_emp }}">Modificar</button>
                                </td> --}}
                <form action="{{ route('empleado.delete', $items->id_emp) }}" method="post">
                    @csrf
                    @method('PUT')
                    <td><button type="sudmit" class="btn btn-secondary">Eliminar</button></td>
                </form>
            </div>
            </tr>
            {{-- @include('empleado.modificar') --}}
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
