<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignaturas = Subject::all();
        return view('CRUD.asignatura.index') -> with('asignaturas', $asignaturas);
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
        $asignaturas = new Subject();

        $asignaturas->siglema = $request->get('siglema');
        $asignaturas->nombre = $request->get('nombre');
        $asignaturas->horas = $request->get('horas');

        
        $asignaturas->save();

        return redirect('/asignaturas');
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
        $asignatura = Subject::find($id);
        return view('CRUD.asignatura.edit') -> with('asignatura', $asignatura);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $asignatura = Subject::find($id);

        $asignatura->siglema = $request->get('siglema');
        $asignatura->nombre = $request->get('nombre');
        $asignatura->horas = $request->get('horas');

        $asignatura->save();

        return redirect('/asignaturas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asignatura = Subject::find($id);
        $asignatura->delete();
        return redirect('/asignaturas');
    }
}
