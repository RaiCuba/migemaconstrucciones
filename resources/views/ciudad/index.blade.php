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
        <a href="{{ route('formulariociudad') }}"><button type="sudmit" class="btn btn-outline-dark">Nueva Ciudad</button>
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Gestionar Ciudad</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>id ciudad</th>
                        <th>ciudad</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->id_ciu }}</p>
                            </td>

                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->nombre }}</p>
                            </td>
                            <div>
                                <td><a href=""><button type="sudmit" class="btn btn-secondary">Modificar</button>
                                    </a> </td>

                                <td><a href="{{ route('ciudad.delete', $items->id_ciu) }}"><button type="sudmit"
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
