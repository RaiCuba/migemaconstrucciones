
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
          
          <ul class="navbar-nav me-auto mb-5 mb-lg-0">
          <!--Usuario autentificado -->
            @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name ?? auth()->user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Acción</a></li>
              <li><a class="dropdown-item" href="#">Otra acción</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/logout">Cerrar Sessión</a></li>
            </ul>
          </li>
          @endauth
            
            
          </ul>
        </form>
      </div>
    </div>
  </nav>