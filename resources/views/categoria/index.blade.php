@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif
    <a href="{{ route('formulariocategoria') }}"><button type="sudmit" class="btn btn-outline-dark">Nuevo Categoria de
            producto</button> </a>

    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4>Gestionar Categoria de producto</h4>
            </div>
            <div class="table-responsive">

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>nombre</th>
                            <th>descrip</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->id_cat }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->nombre }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->descrip }}</p>
                                </td>
                                <div>
                                    {{-- <td><a href="{{ route('modificarcategoria', $items->id_cat) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td> --}}
                                    <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#modalEditar{{ $items->id_cat }}">Modificar</button>
                                    </td>
                                    <td><a href="{{ route('categoria.delete', $items->id_cat) }}"><button type="sudmit"
                                                class="btn btn-secondary">Eliminar</button> </a> </td>
                                </div>
                            </tr>
                            @include('categoria.modificar')
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
