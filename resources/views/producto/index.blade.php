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
        <a href="{{ route('formularioproducto') }}"><button type="sudmit" class="btn btn-outline-dark">Añadir + Cantidad de
                Producto</button>
        </a>
    </div>

    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4>Gestionar Producto</h4>
            </div>
            <div class="table-responsive">

                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th class="ocultar">Identificador</th>
                            <th>Nombre de producto </th>
                            <th>Cantidad </th>
                            <th>Precio X M3 </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_cos_pro }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->nombre }} </p>
                                </td>

                                </td>
                                <td class="col-auto ">
                                    <p class=" mb-0">{{ $items->cantidad }} m3</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->precio }} </p>
                                </td>
                                <div>
                                    {{-- <td><a href="{{ route('modificarproducto', $items->id_cos_pro) }}"><button
                                                type="sudmit" class="btn btn-secondary">Modificar</button> </a> </td> --}}
                                    <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#modalEditar{{ $items->id_cos_pro }}">Modificar</button>
                                    </td>
                                    <td><a href="{{ route('producto.delete', $items->id_cos_pro) }}"><button type="sudmit"
                                                class="btn btn-secondary">Eliminar</button> </a> </td>
                                </div>
                            </tr>
                            @include('producto.modificar')
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
