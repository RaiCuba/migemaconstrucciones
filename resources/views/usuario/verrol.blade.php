@extends('layouts.menupricipal')
@section('Contenido')
    <!--se requiere este para ralaval para que funciones-->

    <div class="mb-3 ocultar">
        <label class="form-label">{{ $roles->nombre }} {{ $roles->ape }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Usuario</label>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ $roles->name }}</label>

    </div>
@endsection
