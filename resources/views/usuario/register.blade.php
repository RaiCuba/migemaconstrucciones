@extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h1>Crear usuario</h1>
        @include('layouts.mensaje')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Empleado: </label>
            <select name="id_emp" id="id_emp" class="form-control" onchange="cambioOpciones">
                @foreach ($empleados as $items)
                    <option value="{{ $items->id_emp }}">{{ $items->persona->nombre }} {{ $items->persona->ape }} </option>
                @endforeach
            </select>

        </div>

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">nombre de usuario</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" value="" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-10">
                <input type="password" name="password_confirmation" class="form-control" id="inputPassword3">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    <script>
        document.getElementById('id_emp').addEventListener('change', function() {

            const nombre = document.getElementById('name');

            var selectValue = this.value;

            @foreach ($empleados as $opcion)
                if (selectValue === '{{ $opcion->id_emp }}') {
                    nombre.value = '{{ $opcion->persona->nombre }} {{ $opcion->persona->ape }}';
                }
            @endforeach

        });
    </script>
@endsection
