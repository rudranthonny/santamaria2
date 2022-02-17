<?php

namespace App\Http\Controllers\Admin;

use App\Exports\FormularioExport;
use App\Http\Controllers\Controller;
use App\Models\Formulario;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }

    public function registrar()
    {
        return view('formulario');
    }

    public function vista_generar_reporte()
    {
        return view('administracion.formularios.exportarformulario');
    }

    public function generar_reporte_excel(Request $request)
    {
        $request->validate([
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
        ]);
        $fecha_inicio = $request->input('fecha_inicio');
        $fecha_final = $request->input('fecha_final');
        return Excel::download(new FormularioExport($fecha_inicio,$fecha_final), 'Formulario.xlsx');
    }
}
