@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Estudiante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <center><h3>Rellene Correctenemte el formulario</h3></center>
    </div>
    <div class="card-body">
        <form action="{{route('admin.estudiantes.store')}}" method="POST">
            @csrf
            <!--codigo del estudiante-->
            <div class="container">
                <div class="row">
                    <div class="mb-3 col-4">
                    <label for="codigo" class="form-label">Codigo del Estudiante</label>
                    <input type="text" class="form-control" id="codigo" name="codigo">
                    @error('codigo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                </div>
            <div class="row">
            <!--nombre del estudiante-->
            <div class="mb-3 col-4">
                <label for="nombre" class="form-label">Nombre del Estudiante</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <!--paterno del estudiante-->
            <div class="mb-3 col-4">
                <label for="ap_paterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="ap_paterno" name="ap_paterno">
                @error('ap_paterno')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <!--matenro del estudiante-->
            <div class="mb-3 col-4">
                <label for="ap_materno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="ap_materno" name="ap_materno">
                @error('ap_materno')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            </div>
            <div class="row">
             <!--grado-->
             <div class="mb-3 col-6">
                <label for="grado" class="form-label">Grado</label>
                <input type="text" class="form-control" id="grado" name="grado">
                @error('grado')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
             <!--grado-->
             <div class="mb-3 col-6">
                <label for="grupo" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo" name="grupo">
                @error('grupo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Crear Estudiante</button>
                <a class="btn btn-dark" href="{{route('admin.estudiantes.index')}}" role="button">Cancelar</a>
            </div>
            </div>
        </form>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop