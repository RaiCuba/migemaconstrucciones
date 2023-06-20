
@extends('layouts.menupricipal')
@section('Contenido')
  

<form action="{{route("pais.update",$pais->id_pai)}}" method="post">
        @csrf
        @method('PUT')
    <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Id pais</label>
  <input type="text" class="form-control" id="textid" name="textid"  value="{{ $pais->id_pai }}" readonly required>
  <div id="emailHelp" class="form-text"></div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">País</label>
  <input type="text" class="form-control" id="pais" name="textpais"  value="{{ $pais->nombre }}" required>
  <div id="emailHelp" class="form-text"></div>
</div>

<div >
  <a href="{{ route('pais') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
  <button type="submit" class="btn btn-primary">guardar cambios de de pais</button>
</div>

</form>

@endsection