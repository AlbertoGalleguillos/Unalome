<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Unalome</title>
    <meta name="description" content="Muchos tenemos la inquietud de ser mejores personas y nos hemos pasado parte de la vida  buscando incansablemente en libros, lugares y personas.
                    Las búsquedas no cesan sino hasta que comienzan los encuentros y encontrar en la mayoría de los casos sólo es cuestión de abrir los ojos porque la vida
                    está llena de ejemplos magníficos y los gurús están en muchas personas, incluso en la gente común, está en todas las buenas palabras y actos que se
                    quedan contigo y te transforman.
                    Eres bienvenido a compartir la energía de tratar de ser mejor persona"> 
</head>
<body>
<nav class="light-blue">
    <div class="nav-wrapper container">
        <img src="/unalome.png" height="90%">
        <a href="/" class="brand-logo">Unalome</a>
    </div>
</nav>
<main>
    @yield('content')
</main>

<footer class="page-footer light-blue">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="white-text">Unalome - El sendero de la busqueda espiritual</h5>
                <p class="grey-text text-lighten-4">
                    Muchos tenemos la inquietud de ser mejores personas y nos hemos pasado parte de la vida  buscando incansablemente en libros, lugares y personas.      
                    Las búsquedas no cesan sino hasta que comienzan los encuentros y encontrar en la mayoría de los casos sólo es cuestión de abrir los ojos porque la vida 
                    está llena de ejemplos magníficos y los gurús están en muchas personas, incluso en la gente común, está en todas las buenas palabras y actos que se 
                    quedan contigo y te transforman.
                    <br><br>Eres bienvenido a compartir la energía de tratar de ser mejor persona
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Desarrollado por <a class="grey-text text-lighten-4" href="https://segasi.cl" target="_blank">Segasi</a>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>