<header>
    <nav class="py-2 bg-body-tertiary border-bottom">
      <div class="container d-flex flex-wrap">
      <a class="navbar-brand" href="#"> <img src="{{ asset('assets/img/LogoK2.png')}}" width="140" ></a>
        <ul class="nav me-auto">
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 active" aria-current="page">Inicio</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Alumnos</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Profesores</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Asignaturas</a></li>
        </ul>
          <div class="col-md-3 text-end">
            <a href="{{route('login')}}" type="button" class="btn btn-outline-primary me-2">Iniciar Sesión</a>
            <a href="{{route('registrar')}}" type="button" class="btn btn-primary">Registrate</a>
          </div>
      </div>
    </nav>
  </header>