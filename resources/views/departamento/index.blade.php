@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->


    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif

    <div class="card">

        <div class="card-header">
            <h4>Gestionar Departamento</h4>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('formulariodepartamento') }}"><button type="sudmit" class="btn btn-outline-dark">Nuevo
                    Departamento</button> </a>
        </div>
        @if ($datos->count())
            <div class="table-responsive">

                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th class="ocultar">Id dep</th>
                            <th>Departamento</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_dep }}</p>
                                </td>

                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->nombre }}</p>
                                </td>
                                <div>
                                    <td><a href="{{ route('formulariodepartamento', $items->id_dep) }}"><button
                                                type="sudmit" class="btn btn-secondary">Modificar</button> </a> </td>

                                    <td><a href="{{ route('departamento.delete', $items->id_dep) }}"><button type="sudmit"
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
        @else
            <div class="card-body">
                <div>
                    <strong>No hay datos</strong>
                </div>
            </div>
        @endif
    @endsection
