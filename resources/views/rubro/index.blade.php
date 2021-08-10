@extends('estructura/layout')
@section('cuerpo')

<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-list mx-2"></i>Rubros:</h2>
    <a href="{{route('rubro.create')}}" class='btn btn-info mx-2'><i class="fas fa-plus me-2"></i>Cargar nuevo</a>
    <hr class=my-4>

    @if(session('mensaje'))
        <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center m-3 p-3">
            <i class='fas fa-question-circle mx-2'></i>{{ session('mensaje') }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-responsive table-striped table-hover text-center border border-info"> <!-- Inicio tabla rubros -->
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Rubro</th>
        <th scope="col">Búsquedas</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rubros as $rubro)
        <tr>
        <p></p>
        <th scope="row">{{$rubro->idRubro}}</th>
        <td>{{$rubro->descripcion}}</td>
        <td>
            <a href="{{route('busqueda.busquedaRubro',$rubro->idRubro)}}" class="btn btn-secondary btn-sm" title="Mostrar búsquedas por rubro"><i class="fas fa-search"></i></a> <!-- Lista búsquedas para tal ID Rubro -->
        </td>
        <td class="btn-group">
            <a href="{{route('rubro.show',$rubro)}}" class="btn btn-info btn-sm" title="Mostrar detalles"><i class="fas fa-eye"></i></a>
            <a href="{{route('rubro.edit',$rubro->idRubro)}}" class="btn btn-info btn-sm" title="Editar detalles"><i class="fas fa-pen"></i></a>
            <form action="{{route('rubro.destroy',$rubro->idRubro)}}" method='POST'>
            @csrf
            @method('DELETE')

                <button type="submit" class="btn btn-info btn-sm" onclick="confirm('¿Está seguro de eliminar el registro #{{$rubro->idRubro}}?');" title="Eliminar registro"><i class="fas fa-trash"></i></button>
            </form>

        </td>
        </tr>
        @endforeach
    </tbody>
    </table> <!-- Fin tabla rubros -->
</div>
@endsection