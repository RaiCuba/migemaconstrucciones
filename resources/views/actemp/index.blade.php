@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif

    <div class="page-heading">
        <h1> Gestionar/Asignacion de actividades a empleados</h1>
    </div>
    <div class="col-12 col-xl-12">

        <div class="card">
            <div class="card-header">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('formularioactemp') }}"><button type="sudmit" class="btn btn-outline-dark">Asignar
                            activiades a empleado</button> </a>
                </div>
            </div>
            <div class="table-responsive">

                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th class="ocultar">id</th>
                            <th>Actividada </th>
                            <th>Empleado</th>
                            <th>nombre de la actividad</th>
                            <th>descripcion de actividad</th>
                            <th>fecha inicio</th>
                            <th>fecha fin</th>
                            <th>fecha</th>
                            <th class="ocultar">estado</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_act_emp }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->actividad->nombre }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->empleado->persona->nombre }}
                                        {{ $items->empleado->persona->ape }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->actividad->nombre }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->actividad->descrip }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha_ini->format('d/m/Y') }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha_fin->format('d/m/Y') }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha->format('d/m/Y') }}</p>
                                </td>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->estado }}</p>
                                </td>
                                <div>
                                    <td><a href="{{ route('modificaractemp', $items->id_act_emp) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td>

                                    <td><a href="{{ route('actemp.delete', $items->id_act_emp) }}"><button type="sudmit"
                                                class="btn btn-secondary">Eliminar</button> </a> </td>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div>
                        {{-- {{ $datos->links() }} --}}
                    </div>
                </div>

            </div>

        </div>
    @endsection
