@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-pen mx-2"></i>Editar rubro #{{$rubro->idRubro}}:</h2>
    <a href="{{route('rubro.index')}}" class='btn btn-info mx-2'><i class="fas fa-chevron-left me-2"></i>Volver al listado</a>
    <hr class=my-4>

    @if (session('mensaje') )
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center m-3 p-3">
        <i class='fas fa-check-circle mx-2'></i>{{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form name=formRubro id=formRubro method="POST" action="{{ route('rubro.update',$rubro->idRubro) }}"> <!-- Inicio formulario rubro -->
        @csrf
        @method('PUT')
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
                <label for=descripcion class=fw-bold>Descripción</label>
            </div>
            <div class="col">
                <input type=text class=form-control name=descripcion id=descripcion placeholder='Rubro' value="{{old('descripcion', $rubro->descripcion)}}">
            </div>
        </div>
        <div class="row row-cols-2 g-3 mb-4 form-group">
            <div id="validaciones">
                <!-- Acá se muestran los mensajes en caso de errores -->
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-info btn-block" type="submit"><i class="fas fa-check me-2"></i>Editar</button>
            </div>
        </div>
    </form> <!-- Fin formulario rubro -->
</div>

@endsection