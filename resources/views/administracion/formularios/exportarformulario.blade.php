@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Exportar Formularios</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <center><h3>Selecciona las fechas para realizar la descargas</h3></center>
    </div>
    <div class="card-body">
        <form action="{{route('admin.formularios.generardescarga')}}" method="POST">
            @csrf
            <!--codigo del estudiante-->
            <div class="container">
                <div class="row">
                    <div class="mb-3 col-4">
                    <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                    <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio">
                    @error('fecha_inicio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-4">
                        <label for="fecha_final" class="form-label">Fecha Final</label>
                        <input type="date" class="form-control" id="fecha_final" name="fecha_final">
                        @error('fecha_final')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            
                <div class="mb-3">
                <button type="submit" class="btn btn-primary">Generar Reporte</button>
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