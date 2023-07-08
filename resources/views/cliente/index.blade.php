@extends('layouts.menunavbar')
@section('clientes')
    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">Expertos en Construcciín Civil</h6>
                        <h1 class="display-3 my-4">Ingeniería <br /> & <br />Construcción</h1>
                        <a href="#" class="btn btn-brand">Agregados</a>
                        <a href="#" class="btn btn-outline-light ms-3">Servicios</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Material de Construcción Seleccionada </h6>
                        <h1 class="display-3 my-4">Material <br />Para <br /> Puentes, Carreterias, Edificios</h1>
                        <a href="#" class="btn btn-brand">Ver Productos</a>
                        <a href="#" class="btn btn-outline-light ms-3">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card de 4-->
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CONSULTORIA</h5>
                    <p class="card-text">Brindemos soluciones. realizamos un análisis integral de las estructuras para
                        determinar que tecnologías en métodos constructivos a emplear, para optimizar técnicas y económicas
                        del proyecto.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CONSTRUCCIÓN CIVIL</h5>
                    <p class="card-text">Mi gema, se especializa en construcciones civiles y sistemas de riegos.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DESARROLLO DE PROYECTOS</h5>
                    <p class="card-text">Desarrollamos perfiles de diseño de proyectos, implementación y puesta en marcha..
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">OBRAS HIDRÁULICAS</h5>
                    <p class="card-text">En nuestro haber, contamos con trabajos de amplia envergadura y optimizada .</p>
                </div>
            </div>
        </div>
    </div>


    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                                <img src="img/icon6.png" alt="">
                                <div class="ms-4">
                                    <h5>Gravilla</h5>
                                    <p>Selección de piedra menuda </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/icon4.png" alt="">
                                <div class="ms-4">
                                    <h5>Grava</h5>
                                    <p>selección de piedra mediana</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/icon5.png" alt="">
                                <div class="ms-4">
                                    <h5>Arena lavada</h5>
                                    <p>Para material de hormigón y concreto </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/icon5.png" alt="">
                                <div class="ms-4">
                                    <h5>Servicios</h5>
                                    <p>Conultoria y Transporte.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="images/misicuni1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- MILESTONE -->
    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-6">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-6">922 m3</h1>
                    <p class="mb-0">Grava</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-6">820 m3</h1>
                    <p class="mb-0">Gravilla</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-6">650 m3</h1>
                    <p class="mb-0">Arena</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-6">365 d</h1>
                    <p class="mb-0">Servicios</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Nuestros servicos</h6>
                        <h1>Empresa construcctora</h1>
                        <p class="mx-auto">Cada obra es diferente y queremos brindarle la mejor solución para tus proyectos,
                            en asesoría y materiales de construcción</p>
                        <p class="mx-auto">Mano de obra calificada</p>
                        <a href="#" class="btn btn-brand">Contáctanos</a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="../public/img/icon1.png" alt="">
                        <h5>Consultoria</h5>
                        <p>Asesoramiento en construcciones y proyectos </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="../public/img/icon2.png" alt="">
                        <h5>Material de construcción</h5>
                        <p>Variaded de material en construcción. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="../public/img/icon3.png" alt="">
                        <h5>Experto en Sistemas de riego</h5>
                        <p>Planificación. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Trabajo</h6>
                        <h1>Proyectos</h1>
                        <p class="mx-auto">
                            Amplia experiencia en el rubro
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects-slider" class="owl-theme owl-carousel">
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project1.jpg" alt="">
                <div class="content">
                    <h2>Consultoria</h2>
                    <h6>En desarrollo de proyectos</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project2.jpg" alt="">
                <div class="content">
                    <h2>Planificación</h2>
                    <h6>De proyectos </h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project3.jpg" alt="">
                <div class="content">
                    <h2>Asesoramiento</h2>
                    <h6>En material de construccion </h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project4.jpg" alt="">
                <div class="content">
                    <h2>Guía</h2>
                    <h6> Para la selección de materiales</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project5.jpg" alt="">
                <div class="content">
                    <h2>Gestion de proyectos</h2>
                    <h6>Seguimientos </h6>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">MiGema Construcciones<span class="dot"></span></h4>
                        <p>
                            Servicio de áridos y agregados a nivel nacional e internacinal
                        </p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                        </div>
                        <div class="col-auto conditions-section">
                            <a href="#">Política</a>
                            <a href="#">Términos</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright 2023. Todos los derechos reservados</p> Publicado por<a hrefs="/">MiGema</a>
        </div>
    </footer>


    <!-- Modal -->
    <!-- Rgistro de contacto desde el sitio del cliente -->

    @include('contacto.registrar')
@endsection
