@extends('estructura/layout')
@section('cuerpo')

<div class="container">

    <h2 class="text-center mb-4"><i class="fas fa-list mx-2"></i>Búsquedas @isset($rubro)por {{$rubro->descripcion}}:@endisset</h2>
    <a href="{{route('busqueda.create')}}" class='btn btn-info mx-2'><i class="fas fa-plus me-2"></i>Cargar nuevo</a>
    <hr class=my-4>
    @if(session('mensaje'))
        <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center m-3 p-3">
            <i class='fas fa-question-circle mx-2'></i>{{ session('mensaje') }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-responsive table-striped table-hover text-center border border-info"> <!-- Inicio tabla búsquedas -->
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Rubro</th>
        <th scope="col">Empresa</th>
        <th scope="col">Título</th>
        <th scope="col">Descripción</th>
        <th scope="col">Inscripciones</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($busqueda as $item)
        <tr>

        <th scope="row">{{$item->idBusqueda}}</th>
        <!-- <td>{{$item->descripcion}}</td> -->
        <td><a href="{{route('busqueda.busquedaRubro',$item->rubro->idRubro)}}" class="btn btn-outline-primary btn-sm">{{$item->rubro->descripcion}}</a></td>
        <td>{{$item->empresa}}</td>
        <td>{{$item->titulo}}</td>
        <td>{{$item->descripcion}}</td>
        <td><a href="{{route('inscripcion.inscripcionBusqueda',$item->idBusqueda)}}" class="btn btn-secondary btn-sm"><i class="fas fa-user"></i></a></td> <!-- Lista inscripciones para tal ID Búsqueda -->
        <td class="btn-group">
            
            <a href="{{route('busqueda.show',$item)}}" class="btn btn-info btn-sm" title="Mostrar detalles"><i class="fas fa-eye"></i></a>
            
            <a href="{{route('busqueda.edit',$item->idBusqueda)}}" class="btn btn-info btn-sm" title="Editar detalles"><i class="fas fa-pen"></i></a>

            <form action="{{route('busqueda.destroy',$item->idBusqueda)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-info btn-sm" onclick="confirm('¿Está seguro de eliminar el registro #{{$item->idBusqueda}}?');" title="Eliminar registro"><i class="fas fa-trash"></i></button>
            </form>

        </td>
        </tr>
        @endforeach
    </tbody>
    </table> <!-- Fin tabla búsquedas -->
</div>

<!-- Idea: Modal único y personalizado para confirmar eliminar registro. Por el momento usando confirm(), más simple.
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmarBorrar">
    Ejemplo abrir modal
</button> -->

<script>

function confirmarBorrar() {
}
</script>


<!-- Modal -->
<div class="modal fade" id="confirmarBorrar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">¿Está seguro de querer eliminar el registro ?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal"><i class="fas fa-chevron-left me-2"></i>Volver atrás</button>
            <a href="" class="btn btn-danger"><i class="fas fa-trash me-2"></i>Estoy seguro</a>
        </div>
        </div>
    </div>
</div>

@endsection