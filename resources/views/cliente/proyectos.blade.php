@extends('layouts.menunavbar')
@section('clientes')
    <img src="./images/imgcliente/proyectos.jpg" alt="...">

    <section id="services" class="text-center">
        <div class="container">

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="service">
                        <i class="bi bi-files"></i>
                        <h5>Consultoria</h5>
                        <div class="text-justify">
                            <p>Brindemos soluciones. realizamos un análisis integral de las estructuras para determinar que
                                tecnologías en métodos constructivos a emplear, para optimizar técnicas y económicas del
                                proyecto</p>
                        </div>
                        <a href="#" class="btn btn-brand">Contáctanos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service">
                        <i class="bi bi-bar-chart-fill"></i>
                        <h5>Construcción civil</h5>
                        <p>Mi gema, se especializa en construcciones civiles y sistemas de riegos.</p>
                        <a href="#" class="btn btn-brand">Contáctanos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service">
                        <i class="bi bi-graph-up-arrow"></i>
                        <h5>Desarrollo de proyectos</h5>
                        <p>Desarrollamos perfiles de diseño de proyectos, implementación y puesta en marcha.</p>
                        <a href="#" class="btn btn-brand">Contáctanos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service">
                        <i class="bi bi-grid"></i>
                        <h5>Obras Hidraúlicas</h5>
                        <p>En nuestro haber, contamos con trabajos de amplia envergadura y optimizada </p>
                        <a href="#" class="btn btn-brand">Contáctanos</a>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
    </section>
    <div class="container">
        <div class=" service">
            <div class="text-right justify-content-center">
                <div class="service ">
                    <h1>Nuestro proyectos</h1>
                    <p class="mx-auto">
                        Los servicios que ofrecemos nos califican con la amplia experiencia de los trabajos
                    </p>

                    <a href="#" class="btn btn-brand">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>

    </div>

    <br><br>
    <div class="container">
        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./images/imgcliente/misicuni.jpg" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Represa de misicuni</h5>
                        <h3 class="card-title">Obras civiles</h3>
                        <p class="card-text">Contratos...</p>
                        <p class="card-text"><small class="text-muted">Cochabamba - Bolivia</small></p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./images/imgcliente/reigo.jpg" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Construcción de sistemas de riegos</h5>
                        <h3 class="card-title">Obras civiles</h3>
                        <p class="card-text">Contratos...</p>
                        <p class="card-text"><small class="text-muted">Cochabamba - Bolivia</small></p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./images/imgcliente/misicuni.jpg" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Pryectos a nivel nacional</h5>
                        <h3 class="card-title">Obras civiles</h3>
                        <p class="card-text">Contratos...</p>
                        <p class="card-text"><small class="text-muted">Bolivia</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT -->




    <br>
    <br>
    <div class="card text-center">
        <div class="card-header">
            Trabajamos para garantizar al cliente su constrcción
        </div>
        <div class="card-body">
            <h5 class="card-title">Empresa constructora</h5>
            <p class="card-text"> Cada obra es diferente y queremos brindarle la mejor solución para tus proyectos, en
                asesoría y materiales de construcción
                Mano de obra calificada.</p>
            <a href="#" class="btn btn-brand">Contactos</a>
        </div>
        <div class="card-footer text-muted">
            ...
        </div>
    </div>



    <!--footer-->
    @include('cliente.footer')




    <!-- Modal -->
    @include('contacto.registrar')
@endsection
