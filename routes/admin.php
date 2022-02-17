<?php

use App\Http\Controllers\Admin\EstudianteController;
use App\Http\Controllers\Admin\FormularioController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PreguntaController;
use Illuminate\Support\Facades\Route;


//ruta de Administrador
Route::get('',[HomeController::class,'index'])->name('admin.home');
//estudiantes
Route::resource('estudiantes',EstudianteController::class)->names('admin.estudiantes');
//formularios
Route::get('formularios/vistareporte',[FormularioController::class,'vista_generar_reporte'])->name('admin.formularios.vistareporte');
Route::post('formularios/generardescarga',[FormularioController::class,'generar_reporte_excel'])->name('admin.formularios.generardescarga');
Route::resource('formularios',FormularioController::class)->names('admin.formularios');
//preguntas
Route::resource('preguntas',PreguntaController::class)->names('admin.preguntas');
