@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif
    <a href="{{ route('realizar.backup') }}" class="btn btn-outline-dark">Realizar Backup</a>

    {{-- <div class="container">
        <h1>Copia de Seguridad</h1>
        <form action="{{ route('realizar.backup') }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-primary">Crear Copia de Seguridad</button>
        </form>
    </div> --}}
@endsection
