<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busqueda;
use App\Models\Rubro;


class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busqueda = Busqueda::all();
        foreach($busqueda as $item)
        {
            $item->rubro=Rubro::find($item->idRubro);
        }
        return view ('busqueda.index', compact('busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function busquedaRubro($id)
    {
        $busqueda = Busqueda::get()->where('idRubro',$id);
        $rubro = Rubro::find($id);
         foreach($busqueda as $item)
         {
             $item->rubro=Rubro::findOrFail($item->idRubro);
         }
        // return view ('busqueda.index',compact('busqueda'));
        return view('busqueda.index',compact('busqueda','rubro'));
    }

    public function create()
    {
        $rubros = Rubro::all();
        return view('busqueda.create',compact('rubros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Primero valida los campos requeridos. Si algo falla, retorna arreglo $error a la vista:
        $request->validate([
            'rubro' => 'required|exists:App\Models\Rubro,idRubro', // Valida que en la base de datos exista el Rubro seleccionado (normalmente ya aparece en el input select)
            'empresa' => 'required|min:3|max:150',
            'titulo' => 'required|min:3|max:150',
            'descripcion' => 'required|min:3|max:150'
        ]);

        $nuevaBusqueda = new Busqueda;
        $nuevaBusqueda->idRubro=$request->rubro;
        $nuevaBusqueda->empresa=$request->empresa;
        $nuevaBusqueda->titulo=$request->titulo;
        $nuevaBusqueda->descripcion=$request->descripcion;

        $nuevaBusqueda->save();
        return back()->with('mensaje', 'Busqueda Agregada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $busqueda = Busqueda::find($id);
        return view('busqueda.show', ['busqueda'=> Busqueda::find($id)
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $busqueda=Busqueda::findOrFail($id);
        $rubroSeleccionado=Rubro::find($busqueda->idRubro);
        $busqueda->rubro=$rubroSeleccionado;
        $rubros=Rubro::all();

        return view('busqueda.edit',compact('busqueda','rubros'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Primero valida los campos requeridos. Si algo falla, retorna arreglo $error a la vista:
        $request->validate([
            'rubro' => 'required|exists:App\Models\Rubro,idRubro', // Valida que en la base de datos exista el Rubro seleccionado (normalmente ya aparece en el input select)
            'empresa' => 'required|min:3|max:150',
            'titulo' => 'required|min:3|max:150',
            'descripcion' => 'required|min:3|max:150'
        ]);

        $busqueda = Busqueda::find($id);
        $busqueda->empresa=$request->empresa;
        $busqueda->titulo=$request->titulo;
        $busqueda->descripcion=$request->descripcion;
        $busqueda->idRubro=$request->rubro;

        $busqueda->save();
        return back()->with('mensaje',' Búsqueda modificada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $busquedaEliminar = Busqueda::findOrFail($id);
        $busquedaEliminar->delete();
        return back()->with('mensaje', 'Busqueda Eliminada');
    }
}
