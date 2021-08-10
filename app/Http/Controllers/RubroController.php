<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rubro;

class RubroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubros = Rubro::all();
        return view ('rubro.index', compact('rubros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('rubro.create');
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
            'descripcion' => 'required|min:3|max:150'
        ]);

        $rubroNuevo = new Rubro;
        $rubroNuevo->descripcion = $request->descripcion;

        $rubroNuevo->save();
        return back()->with('mensaje', 'Rubro Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rubro = Rubro::find($id);
        return view('rubro.show', ['rubro'=> Rubro::find($id)
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
        $rubro = Rubro::findOrFail($id);
        return view('rubro.edit', compact('rubro'));
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
        $request->validate([
            'descripcion' => 'required|min:3|max:150',
        ]);

        $rubro=Rubro::find($id);
        $rubro->descripcion=$request->descripcion;
        $rubro->save();

        return back()->with('mensaje', 'Rubro editado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rubroEliminar = Rubro::findOrFail($id);
        $rubroEliminar->delete();
        return back()->with('mensaje', 'Rubro Eliminado');
    }
}
