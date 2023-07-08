@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('empcar.update', $empcar->id_emp_car) }}" method="post">
        @csrf
        @method('PUT')

        <h1 class="modal-title fs-5" id="modalRegistrarpais">Asignar nuevo cargo a empleado</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Empleado</label>
            <select name="textempleado" class="form-control">
                @foreach ($empleados as $items)
                    <option value="{{ $items->id_emp }}">{{ $items->id_emp }}</option>
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
            <label for="exampleInputEmail1" class="form-label">Descripcion de cargo de empleado</label>
            <input type="text" class="form-control" name="textdescrip" required value="{{ $empcar->descrip }}">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div>
            <a href="{{ route('empcar') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">guardar cambios de asignación de cargo a empleados</button>
        </div>

    </form>
@endsection
