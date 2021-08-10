@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-plus mx-2"></i>Nueva inscripción:</h2>
    <a href="{{route('rubro.index')}}" class='btn btn-info mx-2'><i class="fas fa-chevron-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    @if (session('mensaje') )
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center m-3 p-3">
        <i class='fas fa-check-circle mx-2'></i>{{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form name=formInscripcion id=formInscripcion method="POST" action="{{route('inscripcion.store')}}" > <!-- Inicio formulario inscripción -->
        @csrf 
        
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center m-3 p-3">
            <i class='fas fa-times-circle mx-2'></i><h5>Revisa los siguientes datos e inténtalo nuevamente</h5><!-- Valida en servidor y regresa mostrando los siguientes errores -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col">
                <label for=busqueda class=fw-bold>Inscribirse en...</label>
            </div>
            <div class="col">
                <select class=form-select name=busqueda id=busqueda>
                    <option value=Ninguno disabled selected value>Seleccione una opción...</option>
                    @foreach($busqueda as $item)
                    <option value="{{($item->idBusqueda)}}">{{$item->titulo}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col">
                <label for=nombre class=fw-bold>Nombre</label>
            </div>
            <div class="col">
                <input type=text class=form-control name=nombre id=nombre placeholder='Ingrese el nombre' value="{{old('nombre')}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col">
                <label for=apellido class=fw-bold>Apellido</label>
            </div>
            <div class="col">
                <input type=text class=form-control name=apellido id=apellido placeholder='Ingrese el apellido' value="{{old('apellido')}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div id="validaciones">
                <!-- Acá se muestran los mensajes en caso de errores -->
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-info btn-block" type="submit"><i class="fas fa-check me-2"></i>Agregar</button>
            </div>
        </div>
    </form> <!-- Fin formulario inscripción -->
</div>

@endsection