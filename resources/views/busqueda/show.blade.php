@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-eye mx-2"></i>Detalle búsqueda #{{$busqueda->idBusqueda}}:</h2>
    <a href="{{route('busqueda.index')}}" class='btn btn-info mx-2'><i class="fas fa-chevron-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    <fieldset disabled> <!-- Inicio detalle búsqueda -->
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=id class=fw-bold>Número ID</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=id id=id placeholder='No hay empresa' value="{{$busqueda->idBusqueda}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=empresa class=fw-bold>Empresa</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=empresa id=empresa placeholder='No hay empresa' value="{{$busqueda->empresa}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=titulo class=fw-bold>Título</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=titulo id=titulo placeholder='No hay título' value="{{$busqueda->titulo}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=descripcion class=fw-bold>Descripción</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=descripcion id=descripcion placeholder='No hay descripción' value="{{$busqueda->descripcion}}">
            </div>
        </div>
    </fieldset> <!-- Fin detalle búsqueda -->
</div>
@endsection