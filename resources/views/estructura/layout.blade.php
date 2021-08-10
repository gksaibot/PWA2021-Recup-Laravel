<!doctype html>
<!--
    Programación Web Avanzada 2021
    Trabajo práctico N° 3: Laravel
    @author Agustín Cerda
    @link https://github.com/gksaibot/
-->

<html lang="es">
<head>
    <title>'Empleos TICS'</title>
    <!-- Etiquetas meta requeridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Agustín Cerda">
    <!-- Icono web -->
    <link rel="shortcut icon" href="{{ asset('img/maletin.ico') }}">
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrapValidator.min.css') }}">
    <!-- Mi estilo: -->
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <!-- Iconos de Font Awesome (link personal) -->
    <script src="{{ asset('js/FontAwesome.js') }}" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    
</head><!-- Fin cabecera -->

<body class="container my-3">
    @include("estructura/menu")
    <main class="container p-2 shadow-lg" id=cuerpo> <!-- Inicio main cuerpo-->
        @yield('cuerpo')
    </main> <!-- Fin main cuerpo -->


<footer class=container> <!-- Inicio pie -->
    <div class="row shadow-lg border rounded badge-info p-2 my-1 text-light" id=pie>
        <div class="col">
            <h5>Agustín Cerda<span class="fs-6 fst-italic"> - Leg. 71853</span></h5>
        </div>
        <div class="col">
            <p>
            Trabajo práctico n°3 usando Laravel<br>
            Programación Web Avanzada<br>
            Año 2021<br>
            Universidad Nacional del Comahue
            </P>
        </div>
    </div>
</footer> <!-- Fin pie -->

<!-- Mostrar versión de Laravel y PHP instalados -->
<div class="ml-4 text-end text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div>

<!-- Carga en orden JQuery (en header), Bootstrap+Popper y validador -->
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrapValidator.js') }}"></script>
<script src="{{ asset('js/bootstrap/mensajesBVes_ES.js') }}"></script>

<!-- Carga scripts propios -->
<script src="{{ asset('js/confirmarSalir.js') }}"></script>
<script src="{{ asset('js/validaciones.js') }}"></script>
<script src="{{ asset('js/volverArriba.js') }}"></script>

<button class="btn btn-info shadow-sm" onclick="irArriba()" id="volverArriba" title="Volver arriba"><i class="fas fa-chevron-up"></i></button>
</body>
</html>