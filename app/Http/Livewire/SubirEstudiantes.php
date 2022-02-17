<?php

namespace App\Http\Livewire;

use App\Imports\EstudianteImport;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;

class SubirEstudiantes extends Component
{
    use WithFileUploads;
    public $usuarios;
    public $resultado2;
    public $mensaje;
    public $iteration;

    public function reiniciarestudiantes(){
        $this->usuarios = null;
        $this->iteration++;
    }
    public function subirestudiantes()
    { 
        if (isset($this->usuarios)) {
            try{
                //realizar la importacioón
                Excel::import(new EstudianteImport,$this->usuarios);
                $this->resultado2 = "Importacion de Usuarios Completada";
                $success = "true";
                $this->usuarios = null;
                $this->iteration++;
            }
            catch (Exception $th){
                $this->resultado2 = "Error en importacion \n";
                if(isset($th->errorInfo[2])){
                    $this->resultado2 .= str_replace(["Undefined index", "Duplicate entry", "for key", "alumnos.alumnos_", "_unique"], ["Falta la columna", "Entrada duplicada", "para la clave", "", ""], $th->errorInfo[2]);
                }else{
                    $this->resultado2 .= str_replace(["Undefined index"], ["Falta la columna"], $th->getMessage());
                }
                $success = "false";
            }
        } else {
            $this->message = "Por favor ingrese un archivo csv, con la informacion requerida";
        }
    }
    public function render()
    {
        return view('livewire.subir-estudiantes');
    }
}
