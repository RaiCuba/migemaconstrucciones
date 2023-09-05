@extends('layouts.menunavbar')
@section('estilos')
    <style>
        section {
            display: flex;
            width: 1000px;
            height: 830px;
        }

        section img {
            width: 0px;
            flex-grow: 1;
            object-fit: cover;
            opacity: .8;
            transition: .5s ease;
        }

        section img:hover {
            cursor: crosshair;
            width: 600px;
            opacity: 1;
            filter: contrast(120%);
        }
    </style>
    <link rel="stylesheet" href="assets/css/misestilos.css">
@endsection
@section('clientes')
    <div class="container">
        <section>
            <img src="./images/galeria/maquinaria.jpg" class="" alt="...">
            <img src="./images/galeria/misicuni1.jpg" class="" alt="...">
            <img src="./images/galeria/misicuni2.jpg" class="" alt="...">
            <img src="./images/galeria/misicuni3.jpg" class="" alt="...">
            <img src="./images/galeria/volqueta.png" class="" alt="...">
        </section>
    </div>

    @include('cliente.footer')
@endsection
