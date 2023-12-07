<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salones = Classroom::all();
        return view('CRUD.salon.index') -> with('salones', $salones);
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
        $salones = new Classroom();

        $salones->nombre = $request->get('nombre');
        $salones->ubicacion = $request->get('ubicacion');
        
        $salones->save();

        return redirect('/salones');
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
        $salon = Classroom::find($id);
        return view('CRUD.salon.edit') -> with('salon', $salon);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salon = Classroom::find($id);

        $salon->nombre = $request->get('nombre');
        $salon->ubicacion = $request->get('ubicacion');
        
        $salon->save();

        return redirect('/salones');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salon = Classroom::find($id);
        $salon->delete();
        return redirect('/salones');
    }
}
