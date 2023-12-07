@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
    <h1>Lista de Alumnos</h1>
@stop

@section('content')
    <h1></h1>
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#create-modal">
        Inscribir
    </button>
    <table class="table shadow-lg" id="datatable">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Nacimiento</th>
            <th scope="col" width="35%">Domicilio</th>
            <th scope="col" width="18%">Acciones</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{$alumno -> id}}</td>
                <td>{{$alumno -> nombre}}</td>
                <td>{{$alumno -> apellido_pat}}</td>
                <td>{{$alumno -> apellido_mat}}</td>
                <td>{{$alumno -> nacimiento}}</td>
                <td>{{$alumno -> domicilio}}</td>
                <td>
                    <form action="{{route('alumnos.destroy', $alumno->id)}}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <a href="/alumnos/{{$alumno->id}}/edit" class="btn btn-warning">Editar</a>                  
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal">Eliminar</button>
                    @component('_components.modalDelete')
                        @slot('modal_title', 'Eliminacion')
                            @slot('content')
                                <center>
                                    <p>Eliminando...</p>
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Eliminando...</span>
                                    </div>
                                </center>
                            @endslot
                    @endcomponent
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>     
    <!-- Modal Inscribir-->
    <form action="/alumnos" method="POST">
        @csrf
        @component('_components.modal')
            @slot('modal_title', 'Agregar Alumnos')
            @slot('content')
                <div class="row g-4">
                    <div class="col-md">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Juan">
                    </div>
                    <div class="col-md">
                        <label for="exampleFormControlInput1" class="form-label">Apellido Paterno</label>
                        <input type="text" name="apePat" class="form-control" id="exampleFormControlInput1" placeholder="Garcia">
                    </div>
                    <div class="col-md">
                        <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
                        <input type="text" name="apeMat" class="form-control" id="exampleFormControlInput1" placeholder="Montes">
                    </div>
                    <div class="col-md">
                        <label for="exampleFormControlInput1" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="nacimiento" class="form-control" id="exampleFormControlInput1" placeholder="30/11/1998">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Domicilio</label>
                    <textarea class="form-control" name="domicilio" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            @endslot
        @endcomponent
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#datatable');
</script>
@stop