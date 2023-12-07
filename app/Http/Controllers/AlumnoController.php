<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('CRUD.alumno.index') -> with('alumnos', $alumnos);
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
        $alumnos = new Alumno();

        $alumnos->nombre = $request->get('nombre');
        $alumnos->apellido_pat = $request->get('apePat');
        $alumnos->apellido_mat = $request->get('apeMat');
        $alumnos->nacimiento = $request->get('nacimiento');
        $alumnos->domicilio = $request->get('domicilio');
        
        $alumnos->save();

        return redirect('/alumnos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alumno = Alumno::find($id);
        return view('CRUD.alumno.edit') -> with('alumno', $alumno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno = Alumno::find($id);

        $alumno->nombre = $request->get('nombre');
        $alumno->apellido_pat = $request->get('apePat');
        $alumno->apellido_mat = $request->get('apeMat');
        $alumno->nacimiento = $request->get('nacimiento');
        $alumno->domicilio = $request->get('domicilio');
        
        $alumno->save();

        return redirect('/alumnos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect('/alumnos');
    }
}
