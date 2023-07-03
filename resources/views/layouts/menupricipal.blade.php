
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Gema</title>
    <link rel="shortcut icon" href="../public/images/logo/logo1.png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <style>
    #footer {
        position:fixed;
        left:0px;
        bottom:0px;
        height:30px;
        width:100%;
        background:#999;
     }
    </style>
  

</head>
@auth
<body>
    
    




    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href=""><img src="../public/images/logo/logo1.png" alt="Logo" srcset=""></a>
                        </div>
                        <div >
                            <a>Mi Gema Construcciones</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>











                <div class="sidebar-menu">
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
                                    <a href="">Horario de Trabajo</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('horaasig') }}">Horario Asignado</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('persona') }}">Registrar datos de empleado</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Actividades</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ route('act') }}">Actividades</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">Asignar Actividad a Empleado</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('tipoact') }}">Tipo de Actividades</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Producto</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ route('producto') }}">Producto</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('categoria') }}">Categoria de producto</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('costoprod') }}">Costo de Producto</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('lugar') }}">Almacen de Producto</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-check-fill"></i>
                                <span>Asistencia</span>
                            </a>
                            <ul class="submenu ">
                                
                                <li class="submenu-item ">
                                    <a href="{{ route('asistencia.formulario') }}">Registrar Asistencia</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('asistencia') }}">Ver Asistencia</a>
                                </li>
                               
                                <li class="submenu-item ">
                                    <a href="">Asistencia en Map</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Material </span>
                            </a>
                            <ul class="submenu ">
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
                               
                            </ul>
                        </li>
                        <li class="sidebar-title">Datos Informe</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Reportes</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="./home">Asitencia</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./home">Actividades</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./home">Productos</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="./home">Ventas</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Lugar</span>
                            </a>
                            <ul class="submenu ">
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
                            </ul>
                        </li>

                        <li class="sidebar-title">Registros &amp; admin</li>
                       

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Ver Ubicacion de Empleados</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-map-google-map.html">Google Map</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">Ver Asistencia</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Pages</li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Usuario</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="">Tipo de Usuario</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">Roles</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">Registro</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">Has olvidado tu contraseña</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span>Empleado Retirado</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="error-403.html">Reporte</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li class="sidebar-title"><a href="./logout" >Logout / Cerrar Sección </a>

                        </li>
                        
                       

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
             
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <img src="" alt="">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Bienvenido</h5>
                                    <h6 class="text-muted mb-0">{{ auth()->user()->name ?? auth()->user()->username }}</h6>
                                    <h6 class="font-bold"><a href="./logout" >Cerrar sección</a></h6>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>   

            </header>

            <div class="page-heading">
                <h3>Panel de controlvvvv</h3>
                
            </div>
            <div class="page-content">
                
                <section class="row col-12 col-lg-12"> 
                    <div class="col-12  col-lg-12">
                        @yield('Contenido')
               
                    </div>
                   
                </section> 
            </div>
            
           <div>
            <!-- footer-->
                <footer id="footer">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2023 &copy; Cuba</p>
                        </div>
                        <div class="float-end">
                            <p>Cuba <span class="text-danger"><i class="bi bi-forward-fill"></i></span> by <a href="">Rai</a></p>
                        </div>
                    </div>
                </footer>
           </div>
           
        </div>
        
    </div>
   
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    <div>
        @yield('scripts')
    </div>

</body>
@endauth
@guest
        <P>Para ver el contenido, inicio session <a href="./login">Iniciar sesión</a></P>
@endguest
</html>