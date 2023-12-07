@extends('adminlte::page')

@section('title', 'Editar Profesores')

@section('content_header')
    <h1>Editar datos de Profesores</h1>
@stop

@section('content')
    
    <form action="/profesores/{{$profesor->id}}" method="POST">
        @csrf
        @method('PUT')
                <div class="row g-4">
                    <div class="col-md">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Juan" value="{{$profesor->nombre}}">
                    </div>
                    <div class="col-md">
                        <label for="exampleFormControlInput1" class="form-label">Apellido Paterno</label>
                        <input type="text" name="apePat" class="form-control" id="exampleFormControlInput1" placeholder="Garcia" value="{{$profesor->apellido_pat}}">
                    </div>
                    <div class="col-md">
                        <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
                        <input type="text" name="apeMat" class="form-control" id="exampleFormControlInput1" placeholder="Montes" value="{{$profesor->apellido_mat}}">
                    </div>
                    <div class="col-md">
                        <label for="exampleFormControlInput1" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="nacimiento" class="form-control" id="exampleFormControlInput1" placeholder="30/11/1998" value="{{$profesor->nacimiento}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Domicilio</label>
                    <input class="form-control" name="domicilio" id="exampleFormControlTextarea1" value="{{$profesor->domicilio}}">
                </div>
                <a href="/profesores" type="button" class="btn btn-secondary">Cancelar</a>
                <input type="submit" class="btn btn-warning" value="Hecho">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@stop