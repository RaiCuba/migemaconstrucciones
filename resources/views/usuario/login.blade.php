@extends('layouts.plantilla')
@section('content')
  
  <div class="bg-info d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary">
 
        <form action="./login" method="POST">
          @csrf
        <h1 class="d-flex justify-content-center">Iniciar Seccion</h1>  
        @include('layouts.mensaje')   
        <div class="row mb-2 input-group">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-12">
            <input type="text" name="username" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-2 ">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-12">
              <input type="password" name ="password" class="form-control" id="inputPassword3">
          </div>
            <button type="submit" value="Login" class="btn btn-primary justify-content-cente pt-1" >Login</button>
      
         
    </form>
    </div>

  </div>
  @endsection
  