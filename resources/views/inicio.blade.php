<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stilo.css') }}">
    <title>pagina de inicio</title>
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
<center>
    <link rel="stylesheet" href="stylo.css">
    <ul class="slider">
      <li id="slide1">
        <video src="https://www.youtube.com/watch?v=H2q3BmittbA&feature=youtu.be"/>
      </li>
      <li id="slide2">
        <img src="https://culturaybibliotecas.comfamiliar.com/wp-content/uploads/2017/11/Quinchia-Risaralda-copia.jpg"/>
      </li>
      <li id="slide3">
        <h1>Ejemplo con otros elementos</h1>
        <p>Esto es un párrafo de ejemplo para comprobar que podemos meter cualquier tipo de elementos en el slider</p>
        <a href=http://www.quinchia-risaralda.gov.co/">¡Corre a mi web para más contenido!</a>
      </li>
    </ul>

    <ul class="menu">
      <li>
        <a href="#slide1">1</a>
      </li>
      <li>
        <a href="#slide2">2</a>
      </li>
       <li>
        <a href="#slide3">3</a>
      </li>
    </ul>


</center>
</body>
</html>
