@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('empleado.create') }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Empleado</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Persona Contratada</label>
            <select name="textpersona" class="form-control">
                @foreach ($personas as $items)
                    <option value="{{ $items->id_per }}">{{ $items->nombre }} - {{ $items->ape }}</option>
                @endforeach
            </select>

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargo</label>
            <select name="textcargo" class="form-control">
                @foreach ($cargos as $dato)
                    <option value="{{ $dato->id_car }}">{{ $dato->nombre }}</option>
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
                    <option value="{{ $dato->id_hor_asi }}">H. {{ $dato->hora_ent_m->format('H:i') }} -
                        {{ $dato->hora_sal_m->format('H:i') }} /
                        H. {{ $dato->hora_ent_t->format('H:i') }} - {{ $dato->hora_sal_t->format('H:i') }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción del cargo</label>
            <input type="text" class="form-control" name="textdescrip" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textdescrip')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Observaciones</label>
            <input type="text" class="form-control" id="textdia" name="textobservaciones" required>
            <div id="emailHelp" class="form-text"></div>
            @error('textobservaciones')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div>
            <a href="{{ route('empleado') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
