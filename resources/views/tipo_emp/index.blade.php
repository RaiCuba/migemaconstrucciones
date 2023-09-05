@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif


    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('formulariotipoemp') }}"><button type="sudmit" class="btn btn-outline-dark">Nuevo Tipo
                            de
                            Empleado</button> </a>
                </div>
                <div class="card-header">
                    <h4>Gestionar Tipo de Empleado</h4>
                </div>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th class="ocultar">Id tipo emp</th>
                            <th>Nombre</th>
                            <th class="ocultar">Estado</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_tip_emp }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->nombre }}</p>
                                </td>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->estado }}</p>
                                </td>

                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id_tip_emp }}">Modificar</button>
                                </td>

                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#danger{{ $items->id_tip_emp }}">Eliminar</button>
                                </td>

                            </tr>
                            {{-- Modal Eliminar --}}
                            @include('tipo_emp.eliminar')
                            {{-- Modificar --}}
                            @include('tipo_emp.modificar')
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
    </div>
@endsection
