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
        <a href="{{ route('formulariolugar') }}"><button type="sudmit" class="btn btn-outline-dark">Almacenamiento de
                producto</button> </a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Gestionar llugar de almacenamiento de producto</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead class="table-dark">
                    <tr>
                        <th class="ocultar">Id</th>
                        <th>Almacen</th>
                        <th>descripción</th>
                        <th>Dirección</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_lug }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->almacen }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->descrip }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->direccion }}</p>
                            </td>
                            <div>
                                {{-- <td><a href="{{ route('modificarlugar', $items->id_lug) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td> --}}


                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id_lug }}">Modificar</button>
                                </td>

                                <td><a href="{{ route('lugar.delete', $items->id_lug) }}"><button type="sudmit"
                                            class="btn btn-secondary">Eliminar</button> </a> </td>
                            </div>

                        </tr>
                        @include('lugar.modificar')
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
