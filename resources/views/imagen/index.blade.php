@extends('layouts.menupricipal')
@section('Contenido')
    <!-- mostrar mensaje de registro -->
    @if (session('Correcto'))
        <div class="alert alert-success">{{ session('Correcto') }}</div>
    @endif
    @if (session('Error'))
        <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif



    <div class="page-heading">
        <h1> Ver foto de empleados</h1>
    </div>




    <div class="col-12 col-xl-12">

        <div class="card">
            <div class="card-header">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imagen as $image)
                            <img src="{{ asset('images/fotos/' . $image->imagenn) }}" alt="Imagen">
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>

    </div>
@endsection
