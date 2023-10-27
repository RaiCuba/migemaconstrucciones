<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <div class="logo " style="width: 5rem;">
            <a href=""><img src="../public/images/logo/logo1.png" alt="Logo" srcset=""></a>
        </div>
        <a class="navbar-brand" href="./">
            <!--MiGema <br>Construcciones --> <span class="dot"></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cliente.empresa') }}">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cliente.proyecto') }}">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cliente.poducto') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cliente.galeria') }}">Galeria</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('cliente.poducto') }}" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Agregados
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Arena</a></li>
                        <li><a class="dropdown-item" href="#">Grava</a></li>
                        <li><a class="dropdown-item" href="#">Piedra</a></li>
                        <li><a class="dropdown-item" href="#">Hormigón</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Alquiler de maquinarias</a></li>
                        <li><a class="dropdown-item" href="#">Transporte</a></li>
                        <li><a class="dropdown-item" href="#">Asesoria</a></li>
                        <li><a class="dropdown-item" href="#">Gestión de proyectos</a></li>
                    </ul>
                </li> --}}

            </ul>
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                class="btn btn-brand ms-lg-3">Contactos </a>

            <a href="./login" class="btn btn-brand ms-lg-3">Login </a>

        </div>
    </div>

</nav>
