<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Docente::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombre_docente = $request->nombre_docente;
        $docente->email = $request->email;
        $docente->save();
        return "Guardado en la base";
    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $docente = Docente::find($id);
        $docente->nombre_docente = $request->nombre_docente;
        $docente->email = $request->email;
        $docente->save();
        return "Actualizado en la base";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente, $id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return "Se borro del registro";
    }
}