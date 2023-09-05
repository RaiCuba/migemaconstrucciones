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
        <a href="{{ route('formularioventas') }}"><button type="sudmit" class="btn btn-outline-dark">Nueva
                Venta</button> </a>

    </div>

    <div class="card">
        <div class="card-header">
            <h4>Gestionar Ventas</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="ocultar">Id venta</th>
                        <th>Nombre de producto</th>
                        <th>cantidad </th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th>Fecha</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_det_ven }} </p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->nombre }}
                            </td>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->cantidad }} </p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->precio }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->total }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->fecha->format('d/m/Y') }}</p>
                            </td>
                            <div>
                                <td><a href="{{ route('modificarventas', $items->id_det_ven) }}"><button type="sudmit"
                                            class="btn btn-secondary">Modificar</button> </a> </td>

                                <td><a href="{{ route('ventas.delete', $items->id_det_ven) }}"><button type="sudmit"
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
    @endsection
