@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif


    <div class="">
        <div class="card">
            <div class="card-header">
                <h4>Contacto de clientes del sitio Web</h4>
            </div>
            <div class="table-responsive">

                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th class="ocultar">Id contacto</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>E-mail</th>
                            <th>Mensaje</th>
                            <th>Fecha del mensaje</th>

                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_con }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->nombre }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->apellido }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->email }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->mesaje }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha }}</p>
                                </td>

                                <div>
                                    <td><a href="{{ route('contacto.delete', $items->id_con) }}"><button type="sudmit"
                                                class="btn btn-secondary">Eliminar</button> </a> </td>

                                    {{-- <td><a href="{{ route('contacto.mensaje', $items->id_con) }}"><button type="sudmit" class="btn btn-secondary">Responder</button> </a> </td> --}}

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
