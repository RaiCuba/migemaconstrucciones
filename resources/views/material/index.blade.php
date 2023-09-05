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
        <a href="{{ route('formulariomaterial') }}"><button type="sudmit" class="btn btn-outline-dark">Registrar Nuevo
                material</button> </a>
    </div>



    <div class="card">
        <div class="card-header">
            <h4>Gestionar Producto</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="ocultar">Id material</th>
                        <th>Proveedor</th>
                        <th>Lugar de extracción</th>
                        <th>nombre del material </th>
                        <th>Lugar de almacenamiento </th>
                        <th>cantidad Compra </th>
                        <th>Costo de compra </th>
                        <th>fecha de compra </th>
                        <th class="ocultar">Estado de material</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_mat }} </p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->proveedor->nombre }}</p>
                            </td>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->lugar_ext->lugar }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->nombre }} </p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->lugar }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->compra->cantidad }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->compra->costo }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->compra->fecha->format('d/m/Y') }}</p>
                            </td>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->estado }}</p>
                            </td>

                            <div>
                                <td><a href="{{ route('modificarmaterial', $items->id_mat) }}"><button type="sudmit"
                                            class="btn btn-secondary">Modificar</button> </a> </td>

                                <td><a href="{{ route('material.delete', $items->id_mat) }}"><button type="sudmit"
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
