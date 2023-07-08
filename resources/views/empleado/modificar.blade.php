@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('empleado.update', $empleado->id_emp) }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        @method('PUT')
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Modificar empleado Empleado</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Persona Contratada</label>
            <select name="textpersona" class="form-control">
                @foreach ($personas as $items)
                    <option value="{{ $items->id_per }}">{{ $items->nombre }} - {{ $items->ape }}</option>
                @endforeach
            </select>

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo de Empleado</label>
            <select name="texttipoemp" class="form-control">
                @foreach ($tipoemp as $dato)
                    <option value="{{ $dato->id_tip_emp }}">{{ $dato->nombre }}</option>
                @endforeach
            </select>

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hora de trabajo asignado</label>
            <select name="texthoratra" class="form-control">
                @foreach ($horatra as $dato)
                    <option value="{{ $dato->id_hor_asi }}">{{ $dato->hora_ent }} - {{ $dato->hora_sal }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Observaciones</label>
            <input type="text" class="form-control" name="textobservaciones" required
                value="{{ $empleado->observaciones }}">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div>
            <a href="{{ route('empleado') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </form>
@endsection
