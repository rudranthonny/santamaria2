<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    //para actualizar
    protected $fillable = [
        'codigo',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'grado',
        'grupo',
    ];
    //relacion de 1 a muchos
    public function formularios(){
        return $this->hasMany(Formulario::class);
    }
}
