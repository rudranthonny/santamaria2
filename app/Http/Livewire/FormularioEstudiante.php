<?php

namespace App\Http\Livewire;

use App\Mail\TestMail;
use App\Models\Estudiante;
use App\Models\Formulario;
use App\Models\Pregunta;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormularioEstudiante extends Component
{
    public $estudiante = null;
    public $mensaje ="";
    public $mensaje2 ="";
    public $mensaje3 ="";
    public $codigo_estudiante;
    public $preguntas;
    //array
    public $datos = [];

    public function registra_estudiante(){
        $preguntas = Pregunta::all();
        $this->mensaje2 = "falta algun campo rellenar verificar";
        if ($preguntas->count() == count($this->datos)) 
        {
            if(($this->datos[15] == true) && ($this->datos[16] == true)){
                $v_formulario = Formulario::all()->where('fecha_registro',date("Y-m-d"))->where('estudiante_id',$this->estudiante->id)->count();
                if ($v_formulario == 0) {
                    $this->mensaje2 = "cumple con los requisitos para registrar";
                $formulario = new Formulario();
                $formulario->fecha_registro = date("Y-m-d");
                $formulario->estudiante_id = $this->estudiante->id;
                $formulario->save();
                /**************end**************/
                foreach ($this->datos as $key => $dato) 
                {
                $formulario->preguntas()->attach($key,['respuesta'=> $dato]);
                }
                //enviar un correo
                    $details =[
                        'name' =>  $this->estudiante->nombre." ".$this->estudiante->ap_paterno." ".$this->estudiante->materno,
                    ];
                    Mail::to('ing.anthonny.joel@gmail.com')->send(new TestMail($details));
                    //..........................end................//
                $this->reset();
                $this->mensaje3 ="se registro correctamente";
                }
                else 
                {
                    $this->reset();
                $this->mensaje3 ="ya se registro el formulario el dia de hoy";   
                }
            }
        }
    }

    public function buscarestudiante(){
        $this->estudiante = Estudiante::where('codigo',$this->codigo_estudiante)->first();
        $this->mensaje = "";
        if($this->estudiante == null){
            $this->mensaje = "el estudiante no existe, ingresar el codigo";
        }
    }
    public function render()
    {
        $this->preguntas = Pregunta::all();
        return view('livewire.formulario-estudiante');
    }
    
}
