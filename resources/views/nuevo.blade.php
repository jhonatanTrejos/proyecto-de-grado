<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stilo.css') }}">
    
    <title>login</title>
</head>
<body class="fondo">
   
    <header class="header">
        <div class="wrapper">

            <div class="logo">

                <img src="imagenes/descarg.png" alt="Mi titulo de la imagen">
        <div class="logo">
            Alcaldía de Quinchia
        </div>
        
        <nav>

            <a href="nuevo">Ver certificado laboral</a>
            <a href="" onclick="alert('Seguro!...enviaras una solicitud de certificado'); return true;">Solicitar Certificado Laboral</a>
            <a href="politicas">Politicas y Privacidad </a>
            <a href="">Quienes Somos</a>
            <form >
                <input class="inputB" type="search" placeholder="Busqueda" aria-label="Search" required>
                <button class="botonB" href="#">Buscar</button>
              </form>
        </nav>
        </div>
    
</div>
          
       
    </header>
  <!--  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <img src="imagenes/descarg.png" width="100" alt="" height="100" >
          <a class="navbar-brand" href="#">Alcaldía de Quinchia <br> Certificados Laborales</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">


          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" >Consultas de certificados laborales</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="solicitud">Solicitud de certificados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ayuda</a>
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
      </nav>-->
         <center>
            <link href="{{ asset('css/stilo.css') }}" rel="stylesheet">
             <div style="position: relative; width: 100%">
              <div style="width: 100%; background: #0000;height: 45px; position: absolute" >

            <iframe class="iframe" src="certificado" tabindex="-1" >
                

        </iframe>
        </div>
    </div>
         </center>






      </div>


</body>
</html>
