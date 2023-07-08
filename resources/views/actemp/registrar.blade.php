@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('actemp.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Asignar Actividades</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Actividad</label>
            <select name="actividad" class="form-control">
                @foreach ($actividad as $dato)
                    <option value="{{ $dato->id_act }}">{{ $dato->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Asignar a Empleado</label>
            <select name="empleado" class="form-control">
                @foreach ($empleado as $dato)
                    <option value="{{ $dato->id_emp }}">{{ $dato->persona->nombre }} {{ $dato->persona->ape }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de inicio</label>
            <input type="date" class="form-control" name="fechaini" required>
            <div id="emailHelp" class="form-text"></div>
            @error('fechaini')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>



        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fecha término</label>
            <input type="date" class="form-control" name="fechafin" required>
            <div id="emailHelp" class="form-text"></div>
            @error('fechafin')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div>
            <a href="{{ route('actemp') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
