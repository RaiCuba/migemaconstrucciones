@extends('layouts.plantilla')
@section('content')
  

    <form action="./register" method="POST">
        @csrf
        <h1>Crear usuario</h1>
        @include('layouts.mensaje') 
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">nombre de usuario</label>
          <div class="col-sm-10">
            <input type="text" name ="name"class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
          <div class="col-sm-10">
            <input type="text" name ="username" class="form-control" id="inputEmail3">
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
              <input type="password" name ="password" class="form-control" id="inputPassword3">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-10">
              <input type="password" name ="password_confirmation"class="form-control" id="inputPassword3">
            </div>
          </div>
        
       
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
      @endsection