@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('persona.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nueva parsona</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Nombre *</label>
            <!--old(name) es para no borrarmientras salge error y se mantengas -->
            <input type="text" class="form-control" name="textnombre" maxlength="15" value="{{ old('textnombre') }}">
            <div id="emailHelp" class="form-text"></div>


            @error('textnombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="textape" name="textape" value="{{ old('textape') }}">
            <div id="emailHelp" class="form-text"></div>
            @error('textape')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ci</label>
            <input type="text" class="form-control" name="textci" value="{{ old('textci') }}">
            <div id="emailHelp" class="form-text"></div>
            @error('textci')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefono</label>
            <input type="tel" class="form-control" name="texttel" value="{{ old('texttel') }}">
            <div id="emailHelp" class="form-text"></div>
            @error('texttel')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" name="textcorreo" value="{{ old('textcorreo') }}">
            <div id="emailHelp" class="form-text"></div>
            @error('textcorreo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
            <input type="date" class="form-control" name="textfecha" value="{{ old('textfecha') }}">
            <div id="emailHelp" class="form-text"></div>
            @error('textfecha')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('persona') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
