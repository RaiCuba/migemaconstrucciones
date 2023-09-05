@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif


    <div class="container">
        <div class="row">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href=""><button type="sudmit" class="btn btn-outline-dark">Nuevo
                        Usuario</button> </a>
            </div>
            {{-- <div class="card-header">
                <input wire:model="search" class="form-control" placeholder="Ingres un usuario">
            </div> --}}
            <div class="table-responsive">

                <div class="card-header">
                    <h4>Gestionar Usuario</h4>
                </div>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th class="ocultar">Id usu</th>
                            <th class="ocultar">id emp</th>
                            <th>nombre</th>
                            <th>user name</th>
                            <th> ci</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usu as $items)
                            <tr>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id }}</p>
                                </td>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_emp }}</p>
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
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#modalEditar{{ $items->id }}">Asignar rol</button>
                                </td>

                                {{-- 
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#danger{{ $items->id_tip_emp }}">Eliminar</button>
                                </td> --}}

                            </tr>
                            {{-- asignar rol a usuario --}}
                            @include('usuario.asignarroles')
                            {{-- VER rol a usuario --}}
                            {{-- Modificar --}}
                            {{-- @include('tipo_emp.modificar') --}}
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="row">
                    <div>
                        {{ $datos->links() }}
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
