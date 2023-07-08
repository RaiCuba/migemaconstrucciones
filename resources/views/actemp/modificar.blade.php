@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('act.update', $act->id_act) }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        @method('PUT')
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Modificar asignacion de actividades de empleado</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Actividad</label>
            <select name="actividad" class="form-control">
                @foreach ($acttividad as $dato)
                    <option value="{{ $dato->id_act }}">{{ $dato->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Asignar a Empleado</label>
            <select name="empleado" class="form-control">
                @foreach ($empleado as $dato)
                    <option value="{{ $dato->id_emp }}">{{ $dato->persona->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de inicio</label>
            <input type="text" class="form-control" name="fechaini" required>
            <div id="emailHelp" class="form-text"></div>
        </div>



        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fecha término</label>
            <input type="text" class="form-control" name="fechafin" required>
            <div id="emailHelp" class="form-text"></div>
        </div>


        <div>
            <a href="{{ route('actemp') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
