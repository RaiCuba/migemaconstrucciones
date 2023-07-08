@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('ciudad.update', $ciudad->id_ciu) }}" method="post">
        @csrf
        @method('PUT')
        <h1 class="modal-title fs-5">Modificar Ciudad</h1>
        <div class="form-group">
            <label for="pais">Departamento</label>
            <select name="textdepartamento" class="form-control">
                <option value="">Seleccione un país</option>
                @foreach ($departamentos as $depa)
                    <option value="{{ $depa->id_dep }}">{{ $depa->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ciudad</label>
            <input type="text" class="form-control" name="textciudad" required value="{{ $ciudad->id_ciu }}">
            <div id="emailHelp" class="form-text"></div>
        </div>


        <div>
            <a href="{{ route('ciudad') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">guardar cambios de ciudad</button>
        </div>

    </form>
@endsection
