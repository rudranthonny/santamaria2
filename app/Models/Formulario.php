<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
     //para actualizar
     protected $fillable = [
        'estudiante_id',
        'fecha_registro',
    ];
    //relacion de 1 a muchos inveras
    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
    //relación de muchos a mucho
    public function preguntas(){
        return $this->belongsToMany(Pregunta::class)->withPivot('respuesta');
    }
}