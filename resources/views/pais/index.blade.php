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
        <a href="{{ route('formulariopais') }}"><button type="sudmit" class="btn btn-outline-dark">Nuevo país</button> </a>

    </div>
    <div class="card">
        <div class="card-header">
            <h4>Gestionar Pais</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="ocultar">Id</th>
                        <th>Pais</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_pai }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->nombre }}</p>
                            </td>
                            <div>
                                {{-- <td><a href="{{ route('formulariopais', $items->id_pai) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td> --}}
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id_pai }}">Modificar</button>
                                </td>
                                <td><a href="{{ route('pais.delete', $items->id_pai) }}"><button type="sudmit"
                                            class="btn btn-secondary">Eliminar</button> </a> </td>
                            </div>
                        </tr>
                        @include('pais.modificar')
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
