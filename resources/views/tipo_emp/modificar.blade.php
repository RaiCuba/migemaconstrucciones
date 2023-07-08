@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('tipoemp.update', $tipoemp->id_tip_emp) }}" method="post">
        <!--se requiere este para ralaval para que funciones-->
        @csrf
        @method('PUT')
        <h1 class="modal-title fs-5" id="modalRegistrarpais">ModificarTipo de Empleado</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo de empleado</label>
            <input type="text" class="form-control" id="textid" name="textid" required
                value="{{ $tipoemp->id_tip_emp }}">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo de empleado</label>
            <input type="text" class="form-control" id="texttipoemp" name="texttipoemp" required
                value="{{ $tipoemp->nombre }}">
            <div id="emailHelp" class="form-text"></div>
        </div>


        <div>
            <a href="{{ route('tipoemp') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </form>
@endsection
