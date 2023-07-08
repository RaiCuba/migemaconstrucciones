@extends('layouts.menupricipal')
@section('Contenido')
    <a href="{{ route('imagens.index') }}">ver fotos</a>

    <form action="{{ route('imagen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="exampleInputEmail1" class="form-label">Pais</label>
        <select name="persona" class="form-control">
            @foreach ($personas as $per)
                <option value="{{ $per->id_per }}">{{ $per->nombre }} {{ $per->ape }}</option>
            @endforeach
        </select>

        <input type="text" name="name" placeholder="Nombre de la imagen"><br>
        <input type="file" name="imagen"><br>
        <button type="submit">Subir imagen</button>
    </form>
@endsection
