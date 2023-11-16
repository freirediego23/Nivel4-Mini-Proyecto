<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Asistencia::all();
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
        $asistencia = new Asistencia();
        $asistencia->alumno_id= $request->alumno_id;
        $asistencia->asistencia = $request->asistencia;
        $asistencia->save();
        return "Guardado en la base";
    }

    /**
     * Display the specified resource.
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $asistencia =Asistencia::find($id);
        $asistencia->alumno_id= $request->alumno_id;
        $asistencia->asistencia = $request->asistencia;
        $asistencia->save();
        return "Actualizado en la base";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistencia $asistencia, $id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->delete();
        return "Se borro del registro";
    }
}