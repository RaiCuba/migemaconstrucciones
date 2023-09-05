<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Gema</title>
    <link rel="shortcut icon" href="../public/images/logo/logo1.png">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    @livewireStyles
    {{-- para mostrar el mapa --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    {{-- <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script> --}}
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    {{-- para mostrar el mapa --}}


    <script src="{{ asset('js/axios.min.js') }}"></script>
    <style>
        #footer {
            position: fixed;
            left: 0px;
            bottom: 0px;
            height: 30px;
            width: 100%;
            background: #999;
        }
    </style>
    <style>
        .ocultar {
            visibility: collapse;
            display: none;
        }
    </style>

</head>
@auth

    <body>
        {{-- table table-success table-striped (cambiar de estilo) --}}
        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active ">
                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="logo">
                                <a href=""></a>
                            </div>
                            <div>
                                <a>MiGema Construcciones</a>
                            </div>
                            <div class="toggler">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                        class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-menu ">
                        <ul class="menu">
                            <li class="sidebar-title">Menu</li>

                            <li class="sidebar-item active ">
                                <a href="./home" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Principal</span>
                                </a>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="" class='sidebar-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Empleados</span>
                                </a>
                                <ul class="submenu ">
                                    @role('admin')
                                        <li class="submenu-item ">
                                            <a href="./empleado">Empleados</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('empcar') }}">Asignar Cargo de Empleado</a>
                                        </li>



                                        <li class="submenu-item ">
                                            <a href="{{ route('tipoemp') }}">Tipo de Empleado</a>
                                        </li>

                                        <li class="submenu-item ">
                                            <a href="{{ route('cargo') }}">Cargo</a>
                                        </li>

                                        <li class="submenu-item ">
                                            <a href="{{ route('horaasig') }}">Horario Asignado</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('persona') }}">Registrar datos de empleado</a>
                                        </li>
                                    @endrole
                                    @role('empleado')
                                        <li class="submenu-item ">
                                            <a href="{{ route('datos.empleado', auth()->user()->id_emp) }}">Mis Datos</a>
                                        </li>
                                    @endrole
                                </ul>
                            </li>
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-collection-fill"></i>
                                    <span>Actividades</span>
                                </a>
                                <ul class="submenu ">
                                    @role('admin')
                                        <li class="submenu-item ">
                                            <a href="{{ route('act') }}">Actividades</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('actemp') }}">Asignar Actividad a Empleado</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('tipoact') }}">Tipo de Actividades</a>
                                        </li>
                                    @endrole
                                    @role('empleado')
                                        <li class="submenu-item ">
                                            <a href="{{ route('actividadad.empleado', auth()->user()->id_emp) }}">Mis
                                                Actividades</a>
                                        </li>
                                    @endrole
                                </ul>
                            </li>
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-collection-fill"></i>
                                    <span>Producto</span>
                                </a>
                                <ul class="submenu ">
                                    @role('empleado')
                                        <li class="submenu-item ">
                                            <a href="{{ route('producto') }}">Producto</a>
                                        </li>
                                    @endrole
                                    @role('admin')
                                        <li class="submenu-item ">
                                            <a href="{{ route('categoria') }}">Categoria de producto</a>
                                        </li>
                                    @endrole
                                    @role('empleado')
                                        <li class="submenu-item ">
                                            <a href="{{ route('costoprod') }}"> Registrar Nuevo Producto</a>
                                        </li>
                                    @endrole
                                    @role('admin')
                                        <li class="submenu-item ">
                                            <a href="{{ route('lugar') }}">Almacen de Producto</a>
                                        </li>
                                    @endrole
                                </ul>
                            </li>
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-person-check-fill"></i>
                                    <span>Asistencia</span>
                                </a>
                                <ul class="submenu ">
                                    @role('empleado')
                                        <li class="submenu-item ">
                                            <a href="{{ route('asistencia.formulario') }}">Registrar Asistencia</a>
                                        </li>
                                    @endrole
                                    @role('admin')
                                        <li class="submenu-item ">
                                            <a href="{{ route('asistencia') }}">Ver Asistencia</a>
                                        </li>
                                    @endrole
                                    @role('empleado')
                                        <li class="submenu-item">
                                            <a href="{{ route('asistencia.empleado', auth()->user()->id_emp) }}">Mis
                                                Asistencias</a>
                                        </li>
                                    @endrole
                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-medical-fill"></i>
                                    <span>Material </span>
                                </a>
                                <ul class="submenu ">
                                    @role('empleado')
                                        <li class="submenu-item ">
                                            <a href="{{ route('material') }}">Material</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('lugarext') }}">Lugar de Extración</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('proveedor') }}">Proveedor</a>
                                        </li>

                                        <li class="submenu-item ">
                                            <a href="{{ route('ventas') }}">ventas</a>
                                        </li>
                                    @endrole
                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-grid-1x2-fill"></i>
                                    <span>Lugar</span>
                                </a>
                                <ul class="submenu ">
                                    @role('empleado')
                                        <li class="submenu-item ">
                                            <a href="{{ route('pais') }}">País</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('departamento') }}">Departamento</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('ciudad') }}">Ciudad</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="">Dirección</a>
                                        </li>
                                    @endrole
                                </ul>
                            </li>


                            @role('admin')
                                <li class="sidebar-title">Usuario</li>


                                <li class="sidebar-item  has-sub">
                                    <a href="#" class='sidebar-link'>
                                        <i class="bi bi-person-badge-fill"></i>
                                        <span>Ajustes de usuario</span>
                                    </a>
                                    <ul class="submenu ">


                                        <li class="submenu-item ">
                                            <a href="{{ route('register.nuevo') }}">Registro</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('usuario.index') }}">Asignar Rol a empleado</a>
                                        </li>
                                        <li class="submenu-item ">
                                            <a href="{{ route('contacto.mostrar') }}">Ver mensajes de la Web</a>
                                        </li>
                                    </ul>
                                </li>
                            @endrole
                            @role('admin')
                                <li class="sidebar-title">Backup</li>


                                <li class="sidebar-item  has-sub">
                                    <a href="#" class='sidebar-link'>
                                        <i class="bi bi-person-badge-fill"></i>
                                        <span>Backup</span>
                                    </a>
                                    <ul class="submenu ">


                                        <li class="submenu-item ">
                                            <a href="{{ route('realizar.backup.form') }}">Respaldo</a>
                                        </li>

                                    </ul>
                                </li>
                            @endrole

                            <li class="sidebar-title"><a href="./logout">Logout / Cerrar Sección </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="main">
                <nav class="navbar navbar-expand-lg navbar-light bg-light text-rigth ">
                    <div class="collapse navbar-collapse table table-success table-striped" id="navbarNavDropdown">
                        <ul class="navbar-nav  ">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    <h5 class="font-bold">
                                        {{ auth()->user()->name ?? auth()->user()->username }}
                                    </h5>

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @role('empleado')
                                        <li><a class="dropdown-item"
                                                href="{{ route('asistencia.empleado', auth()->user()->id_emp) }}">Mi
                                                asistencia</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('actividadad.empleado', auth()->user()->id_emp) }}">Mis
                                                Actividades</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    @endrole
                                    <li><a class="dropdown-item" href="./logout">
                                            Cerrar
                                            sección</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="page-content p-5">

                    <section class="row col-12 col-lg-12">

                        <div class="col-12  col-lg-12">
                            @yield('Contenido')

                        </div>

                    </section>
                </div>

                <div>
                    <!-- footer-->
                    {{-- <footer id="footer">
                        <div class="footer clearfix mb-0 text-muted">
                            <div class="float-start">
                                <p>2023 &copy; Cuba</p>
                            </div>
                            <div class="float-end">
                                <p>Cuba <span class="text-danger"><i class="bi bi-forward-fill"></i></span> by <a
                                        href="">Rai</a></p>
                            </div>
                        </div>
                    </footer> --}}
                </div>

            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>

        <script src="assets/js/main.js"></script>

        @yield('scripts')

        @livewireScripts
    </body>
@endauth
@guest
    <P>Para ver el contenido, inicio session <a href="./login">Iniciar sesión</a></P>
@endguest

</html>
