@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('act.update', $act->id_act) }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        @method('PUT')
        <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Tipo de Actividad</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Actividad</label>
            <input type="text" class="form-control" id="textact" name="textnombre" required value="{{ $act->nombre }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Tipo de Actividad</label>
            <select name="texttipoactividad1" class="form-control">
                @foreach ($tipoact as $dato)
                    <option value="{{ $dato->id_tip_act }}">{{ $dato->nombre }}</option>
                @endforeach
            </select>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Dia</label>
            <input type="text" class="form-control" id="textdia" name="textdia" required value="{{ $act->dia }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mes</label>
            <input type="text" class="form-control" id="textmes" name="textmes" required value="{{ $act->mes }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Año</label>
            <input type="text" class="form-control" id="textanio" name="textanio" required value="{{ $act->anio }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="textdescrip" name="textdescrip" required
                value="{{ $act->descrip }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lugar de Actividad</label>
            <input type="text" class="form-control" id="textlugar" name="textlugar" required value="{{ $act->lugar }}">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div>
            <a href="{{ route('act') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
@endsection
