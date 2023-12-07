<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Teacher::all();
        return view('CRUD.profesor.index') -> with('profesores', $profesores);
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
        $profesores = new Teacher();

        $profesores->nombre = $request->get('nombre');
        $profesores->apellido_pat = $request->get('apePat');
        $profesores->apellido_mat = $request->get('apeMat');
        $profesores->nacimiento = $request->get('nacimiento');
        $profesores->domicilio = $request->get('domicilio');
        
        $profesores->save();

        return redirect('/profesores');
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
        $profesor = Teacher::find($id);
        return view('CRUD.profesor.edit') -> with('profesor', $profesor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profesor = Teacher::find($id);

        $profesor->nombre = $request->get('nombre');
        $profesor->apellido_pat = $request->get('apePat');
        $profesor->apellido_mat = $request->get('apeMat');
        $profesor->nacimiento = $request->get('nacimiento');
        $profesor->domicilio = $request->get('domicilio');
        
        $profesor->save();

        return redirect('/profesores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profesor = Teacher::find($id);
        $profesor->delete();
        return redirect('/profesores');
    }
}
