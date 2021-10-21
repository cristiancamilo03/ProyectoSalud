
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/navbar.css">


<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./img/Icono.svg" style="padding: 10px 10px" alt="" width="90" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('../../historial')}}">Historiales Clínicos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('../../usuarios')}}">Usuarios</a>
            </li>
            <li class="nav-item">
              <a href=""><button style="position: absolute; right: 30px" type="button" class="btn btn-dark">Cerrar Sesión</button></a>
            </li>
          </ul>
        </div>
      </div>
</nav>


@yield('header')
