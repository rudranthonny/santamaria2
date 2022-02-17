@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Estudiantes</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
 <strong>   {{session('info')}} </strong>
</div>
@endif
   <div class="card">
    <div class="card-header container">
      <div class="row">
      <div class="col-sm-3">  
          <a class="btn btn-primary" href="{{route('admin.estudiantes.create')}}" role="button">Crear Estudiante</a>
      </div>
      <div class="col-sm-3">
          @livewire('subir-estudiantes')
      </div>
    </div>
      </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr class="bg-dark">
                <th scope="col">Codigo</th>
                <th scope="col">Nombres y apellidos</th>
                <th scope="col">Grado</th>
                <th scope="col">Grupo</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($estudiantes as $estudiante)
              <tr>
                <td>{{$estudiante->codigo}}</td>
                <td>{{$estudiante->nombre." ".$estudiante->ap_paterno." ".$estudiante->ap_materno}}</td>
                <td>{{$estudiante->grado}}</td>
                <td>{{$estudiante->grupo}}</td>
                <td>
                <form action="{{route('admin.estudiantes.destroy',$estudiante->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-info" href="{{route('admin.estudiantes.edit',$estudiante->id)}}" role="button">Editar</a>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
   </div>
   @livewireScripts
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop