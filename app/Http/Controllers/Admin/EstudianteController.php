<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Formulario;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('administracion.estudiantes.index',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'codigo'  => 'required',
                'nombre'  => 'required',
                'ap_paterno'  => 'required',
                'ap_materno'  => 'required',
                'grado'  => 'required',
                'grupo'  => 'required',
        ]);
        $estudiante = Estudiante::create($request->all());
        return redirect()->route('admin.estudiantes.index')->with('info','el estudiante se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        return view('administracion.estudiantes.edit',compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'codigo'  => 'required',
            'nombre'  => 'required',
            'ap_paterno'  => 'required',
            'ap_materno'  => 'required',
            'grado'  => 'required',
            'grupo'  => 'required',
    ]);
        $estudiante->update($request->all());
        return redirect()->route('admin.estudiantes.index')->with('info','el estudiante se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {   $formulario = Formulario::where('estudiante_id',$estudiante->id)->count();
        $mensaje = 'el estudiante np se puede  eliminar por que tiene registrado por lo menos un formulario';
        if($formulario == 0){ 
        $estudiante->delete();
        $mensaje = 'el estudiante se elimino correctamente';
        }
        return redirect()->route('admin.estudiantes.index')->with('info',$mensaje);
    }
}
