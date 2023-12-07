@extends('adminlte::page')

@section('title', 'Editar Salon de clases')

@section('content_header')
    <h1>Editar datos de Salon de clases</h1>
@stop

@section('content')
    
    <form action="/salones/{{$salon->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="H1101" value="{{$salon->nombre}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ubicacion</label>
            <input class="form-control" name="ubicacion" id="exampleFormControlTextarea1" value="{{$salon->ubicacion}}">
        </div>
                <a href="/salones" type="button" class="btn btn-secondary">Cancelar</a>
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