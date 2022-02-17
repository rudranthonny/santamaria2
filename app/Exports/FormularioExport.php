<?php

namespace App\Exports;

use App\Models\Formulario;
use App\Models\Pregunta;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class FormularioExport implements FromView, WithMapping, ShouldAutoSize
{
    private $inicio;
    private $final;
    public function __construct($inicio,$final)
    {
        $this->inicio = $inicio;
        $this->final = $final;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('administracion.formularios.exportarformulariovista', [
            'formularios' => Formulario::all()->where('fecha_registro','>=',$this->inicio)->where('fecha_registro','<=',$this->final),
            'preguntas' => Pregunta::all(),
        ]);
    }
    public function map($formulario): array
    {
        return [
            Date::dateTimeToExcel($formulario->fecha_registro),
        ];
    }
}
