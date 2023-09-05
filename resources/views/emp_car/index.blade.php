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

        <a href="{{ route('formularioempcar') }}"><button type="sudmit" class="btn btn-outline-dark ">Asignar nuevo cargo a
                empleado</button> </a>
    </div>







    <div class="card ">
        <div class="card-header">
            <h3>Gestionar Asignacion de cargos a empleado </h3>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="ocultar">Id emp carrr</th>
                        <th class="ocultar">id empleado</th>
                        <th>Cargo </th>
                        <th>Detalle de cargo</th>
                        <th>Fecha de asignación</th>
                        <th class="ocultar">Estado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_emp_car }}</p>
                            </td>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_emp }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->cargo->nombre }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->descrip }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->fecha->format('d/m/Y') }}</p>
                            </td>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->estado }}</p>

                                <div>
                            <td><a href="{{ route('modificarempcar', $items->id_emp_car) }}"><button type="sudmit"
                                        class="btn btn-secondary">Modificar</button> </a> </td>

                            <td><a href="{{ route('empcar.delete', $items->id_emp_car) }}"><button type="sudmit"
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
@endsection
