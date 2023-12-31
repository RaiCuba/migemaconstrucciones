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
        <a href="{{ route('formularioproveedor') }}"><button type="sudmit" class="btn btn-outline-dark">Registrar Nuevo
                Proveedor</button> </a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Gestionar Proveedor</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="ocultar">Id proveedor</th>
                        <th>Nombre</th>
                        <th>Organización</th>
                        <th>Nit </th>
                        <th>Descripcion</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_prov }} </p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->nombre }}</p>
                            </td>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->organizacion }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->nit }} </p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->descrip }}</p>
                            </td>

                            <div>
                                {{-- <td><a href="{{ route('modificarproveedor', $items->id_prov) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td> --}}
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id_prov }}">Modificar</button>
                                </td>
                                <td><a href="{{ route('proveedor.delete', $items->id_prov) }}"><button type="sudmit"
                                            class="btn btn-secondary">Eliminar</button> </a> </td>
                            </div>
                        </tr>
                        @include('proveedor.modificar')
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
