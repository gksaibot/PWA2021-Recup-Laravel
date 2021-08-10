@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-eye mx-2"></i>Detalle inscripción #{{$inscripcion->idInscripcion}}:</h2>
    <a href="{{route('inscripcion.index')}}" class='btn btn-info mx-2'><i class="fas fa-chevron-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    <fieldset disabled> <!-- Inicio detalle inscripcion -->
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=inscripcion class=fw-bold>Número de inscripción</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=inscripcion id=inscripcion placeholder='No hay inscripción' value="{{$inscripcion->idInscripcion}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=busqueda class=fw-bold>Número de Búsqueda</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=busqueda id=busqueda placeholder='No hay búsqueda' value="{{$inscripcion->idBusqueda}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=fecha class=fw-bold>Fecha de inscripción</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=fecha id=fecha placeholder='No hay fecha' value="{{$inscripcion->fecha}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=apellido class=fw-bold>Apellido</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=apellido id=apellido placeholder='No hay apellido' value="{{$inscripcion->apellido}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=nombre class=fw-bold>Nombre</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=nombre id=nombre placeholder='No hay nombre' value="{{$inscripcion->nombre}}">
            </div>
        </div>
    </fieldset> <!-- Fin detalle inscripcion -->
</div>
@endsection