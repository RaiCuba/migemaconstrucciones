@extends('layouts.menupricipal')
@section('Contenido')
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif


    <form action="{{ route('act.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Actividad</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo de Actividad</label>
            <select name="texttipoactividad" class="form-control">
                @foreach ($tipoact as $dato)
                    <option value="{{ $dato->id_tip_act }}">{{ $dato->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Actividad</label>
            <input type="text" class="form-control" id="textact" name="textnombre" value="{{ old('textnombre') }}">
            <div id="emailHelp" class="form-text"></div>

            @error('textnombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>



        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Dia</label>
            <input type="date" class="form-control" id="textdia" name="textdia" value="{{ old('textdia') }}">
            <div id="emailHelp" class="form-text"></div>

            @error('textdia')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="textdescrip" name="textdescrip" value="{{ old('textdescrip') }}">
            <div id="emailHelp" class="form-text"></div>

            @error('textdescrip')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lugar de Actividad</label>
            <input type="text" class="form-control" id="textlugar" name="textlugar" value="{{ old('textlugar') }}">
            <div id="emailHelp" class="form-text"></div>
            @error('textlugar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('act') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
