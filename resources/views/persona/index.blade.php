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
        <a href="{{ route('formulariopersona') }}"><button type="sudmit" class="btn btn-outline-dark">Nueva Persona</button>
        </a>
    </div>
    {{-- @livewire('buscar') --}}

    <h4>Gestionar Datos de persona</h4>
    <div class="card">


        <div class="table-responsive">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th class="ocultar">Id persona</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Ci</th>
                        <th>teléfono</th>
                        <th>Correo</th>
                        <th>Fecha de nacimiento</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        <tr>
                            <td class="col-auto ocultar">
                                <p class=" mb-0">{{ $items->id_per }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->nombre }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->ape }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->ci }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->tel }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->correo }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $items->fecha_nac->format('d/m/Y') }}</p>
                            </td>

                            <div class="modal">
                                {{-- <td><a href="{{ route('modificarpersona', $items->id_per) }}"><button type="sudmit"
                                                class="btn btn-secondary">Modificar</button> </a> </td> --}}
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id_per }}">Modificar</button>
                                </td>
                                <td><a href="{{ route('persona.delete', $items->id_per) }}"><button type="sudmit"
                                            class="btn btn-secondary">Eliminar</button> </a> </td>
                            </div>
                        </tr>
                        @include('persona.modificar')
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
