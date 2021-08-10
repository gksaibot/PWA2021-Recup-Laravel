@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-eye mx-2"></i>Detalle rubro #{{$rubro->idRubro}}:</h2>
    <a href="{{route('rubro.index')}}" class='btn btn-info mx-2'><i class="fas fa-chevron-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    <fieldset disabled> <!-- Inicio detalle búsqueda -->
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=id class=fw-bold>Número ID</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=id id=id placeholder='No hay empresa' value="{{$rubro->idRubro}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div class="col col-6">
                <label for=descripcion class=fw-bold>Descripción</label>
            </div>
            <div class="col col-6">
                <input type=text class=form-control name=descripcion id=descripcion placeholder='No hay descripción' value="{{$rubro->descripcion}}">
            </div>
        </div>
    </fieldset> <!-- Fin detalle búsqueda -->
</div>
@endsection