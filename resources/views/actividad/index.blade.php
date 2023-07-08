@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif



    <div class="page-heading">
        <h1> Gestionar/Actividad</h1>
    </div>




    <div class="col-12 col-xl-12">

        <div class="card">
            <div class="card-header">
                <a href="{{ route('formularioact') }}"><button type="sudmit" class="btn btn-outline-dark">Nueva
                        Actividad</button> </a>

            </div>
            <div class="table-responsive">

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Id Act</th>
                            <th>id tipo act </th>
                            <th>nombre de la actividad</th>
                            <th>Dia</th>
                            <th>Descripción</th>
                            <th>Lugar</th>
                            <th>Estado</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->id_act }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->tipo_act->nombre }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->nombre }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->dia }}</p>
                                </td>

                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->descrip }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->lugar }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->estado }}</p>
                                </td>
                                <div>
                                    <td><a href="{{ route('modificaract', $items->id_act) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td>

                                    <td><a href="{{ route('act.delete', $items->id_act) }}"><button type="sudmit"
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
