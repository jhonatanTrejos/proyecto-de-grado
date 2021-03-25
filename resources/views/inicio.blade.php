php<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>pagina de inicio</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <img src="imagenes/descarg.png" width="100" alt="" height="100" >
          <a class="navbar-brand" href="#">Certificado laboral</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">



          </div>
        </div>
      </nav>

      <nav class="navbar navbar-expand-lg" style="background-color: #e3f2ff;">
        <div class="container-fluid">
           >
          <a class="navbar-brand" href="#" >Consultas de certificados laborales</a>
          <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="solicitud">Solicitud de certificados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ayuda y Soporte</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Politicas y privacidad
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quines Somos</a>
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
              <button type="button" class="btn btn-light">search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="login-box">
        <link href="{{ asset('css/stilo.css') }}" rel="stylesheet">


        <img src="imagenes/logoquinchia.png" class="avatar" alt="Avatar Image">
        <h1>Consulta certificado</h1>
        <form action="{{route('cliente.index')}}" method "get">
          <!-- USERNAME INPUT -->
          <label for="username">Número de documento</label>
          <input type="search" class="form-control form-control-navbar " name="texto" placeholder="search" value="texto">
          <a href="nuevo" type="button" href="nuevo" class="btn btn-success">Ver certificado
          </a><button type="button" href="nuevo" class="btn btn-success">Ver certificado</button>
        </form>

      </div>

    </div>
</body>
</html>
