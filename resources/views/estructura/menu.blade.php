<!-- Comienzo menú de navegación -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark border rounded shadow-lg">
    <div class=container-fluid> <!-- Comienzo contenedor -->

        <a href="/" class="navbar-brand"><i class="fas fa-briefcase mx-2"></i>Empleos TICs</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#MenuSuperior" aria-controls="MenuSuperior" aria-expanded="false" aria-label="Menú superior">
            <span class="navbar-toggler-icon"></span>
        </button> <!-- Fin botón desplegable en pantallas chicas-->

        <div class="collapse navbar-collapse" id="MenuSuperior"> <!-- Comienzo contenido menú -->
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('busqueda.index')}}">Busquedas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('inscripcion.index')}}">Inscripciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('rubro.index')}}">Rubros</a>
                </li>
            </ul>
            <!-- <form class="row row-cols-lg-auto g-1 my-2 my-lg-0">
            <div class=col-12>
                <input class="form-control mr-sm-2" name="buscador" id="TextoABuscar" type="search" placeholder="Buscar en esta página" aria-label="Search" onkeydown="leerEnterB(event)"title="Seleccionar la coincidencia">
            </div>
            <div class=col-12>
                <button class="btn btn-outline-light my-2 my-sm-0" onclick="buscarEnPagina( document.getElementById('TextoABuscar').value )" type="button" id=Buscar title="Seleccionar la coincidencia">Buscar</button>
            </div>
            </form> --> <!-- Fin buscador -->
        </div> <!-- Fin contenido desplegable en pantallas chicas -->

    </div> <!-- Fin contenedor -->
</nav> <!-- Fin menú de navegación -->