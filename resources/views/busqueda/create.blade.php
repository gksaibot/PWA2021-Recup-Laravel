@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-plus mx-2"></i>Nueva búsqueda:</h2>
    <a href="{{route('rubro.index')}}" class='btn btn-info mx-2'><i class="fas fa-chevron-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    @if (session('mensaje') )
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center m-3 p-3">
        <i class='fas fa-check-circle mx-2'></i>{{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form name=formBusqueda id=formBusqueda action="{{route('busqueda.store')}}" method='POST'> <!-- Inicio formulario búsqueda -->
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
                <label for=rubro class=fw-bold>Rubro</label>
            </div>
            <div class="col">
                <select class=form-select name=rubro id=rubro>
                    <option value=Ninguno disabled selected value>Seleccione una opción...</option>
                    @foreach($rubros as $rubro)
                        <option value="{{$rubro->idRubro}}">{{$rubro->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col">
                <label for=empresa class=fw-bold>Empresa</label>
            </div>
            <div class="col">
                <input type=text class=form-control name=empresa id=empresa placeholder='Ingrese la empresa' value="{{old('empresa')}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col">
                <label for=titulo class=fw-bold>Título</label>
            </div>
            <div class="col">
                <input type=text class=form-control name=titulo id=titulo placeholder='Ingrese el título' value="{{old('titulo')}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col">
                <label for=descripcion class=fw-bold>Descripción</label>
            </div>
            <div class="col">
                <input type=text class=form-control name=descripcion id=descripcion placeholder='Ingrese la descripción' value="{{old('descripcion')}}">
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
    </form>
</div> <!-- Fin formulario búsqueda -->

@endsection