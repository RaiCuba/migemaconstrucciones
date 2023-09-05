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
        <a href="{{ route('formulariotipoact') }}"><button type="sudmit" class="btn btn-outline-dark">Nuevo Tipo de
                Actividad</button> </a>

    </div>


    <div class="card">
        <div class="card-header">
            <h4>Gestionar Tipo de Actividad</h4>
        </div>
        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="ocultar">Id tipo Act</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th class="ocultar">Estado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_tip_act }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->nombre }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->descrip }}</p>
                            </td>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->estado }}</p>
                            </td>
                            <div>
                                {{-- <td><a href="{{ route('modificartipoact', $items->id_tip_act) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td> --}}
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id_tip_act }}">Modificar</button>
                                </td>
                                {{-- <td><a href="{{ route('tipoact.delete', $items->id_tip_act) }}"><button type="sudmit"
                                                class="btn btn-secondary">Eliminar</button> </a> </td> --}}


                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#danger{{ $items->id_tip_act }}">Eliminar</button>
                                </td>
                            </div>
                        </tr>
                        @include('tipo_act.eliminar')
                        @include('tipo_act.modificar')
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
