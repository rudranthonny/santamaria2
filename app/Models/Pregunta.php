<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'enunciado',
        'tipo',
    ];
     //relación de muchos a muchos
     public function preguntas(){
        return $this->belongsToMany(Formulario::class)->withPivot('respuesta');
    }
}
