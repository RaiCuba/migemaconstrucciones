@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif




    <a href="{{ route('formularioventas') }}"><button type="sudmit" class="btn btn-outline-dark">Registrar Nuevo
            Venta</button> </a>

    <a href="{{ route('ventas1') }}"><button type="sudmit" class="btn btn-outline-dark">Evaluar selectt</button> </a>


    <div class="card">
        <div class="card-header">
            <h4>Gestionar Ventas</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Id venta</th>
                        <th>Nombre de producto</th>
                        <th>nro</th>
                        <th>cantidad </th>
                        <th>Precio</th>
                        <th>descripcion</th>
                        <th>Total</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->id_det_ven }} </p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->producto->costo_pro->nombre }}</p>
                            </td>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->ventum->nro }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->cantidad }} </p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->precio }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->descrip }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->total }}</p>
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
                    {{ $datos->links() }}
                </div>
            </div>

        </div>
    @endsection
