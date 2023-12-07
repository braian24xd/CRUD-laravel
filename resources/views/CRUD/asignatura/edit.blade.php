@extends('adminlte::page')

@section('title', 'Editar Asignaturas')

@section('content_header')
    <h1>Editar datos de Asignaturas</h1>
@stop

@section('content')
    
    <form action="/asignaturas/{{$asignatura->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="exampleFormControlInput1" class="form-label">Siglema</label>
                <input type="text" name="siglema" class="form-control" id="exampleFormControlInput1" placeholder="YT-01" value="{{$asignatura->siglema}}">
            </div>
            <div class="col-md">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Calculo" value="{{$asignatura->nombre}}">
            </div>
            <div class="col-md">
                <label for="exampleFormControlInput1" class="form-label">Horas</label>
                <input type="number" name="horas" class="form-control" id="exampleFormControlInput1" placeholder="5" value="{{$asignatura->horas}}">
            </div>
        </div>
        <a href="/asignaturas" type="button" class="btn btn-secondary ">Cancelar</a>
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