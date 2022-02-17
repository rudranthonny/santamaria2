<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta1';
        $pregunta->enunciado = '¿El estudiante ha presentado en los últimos 7 días fiebre?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta2';
        $pregunta->enunciado = '¿El estudiante ha presentado en los últimos 7 días fiebre o dolor de cabeza?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta3';
        $pregunta->enunciado = '¿El estudiante tiene o ha tenido tos y/o dificultad para respirar en los últimos 7 días?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta4';
        $pregunta->enunciado = '¿El estudiante siente que se ahoga o le falta la respiración al caminar?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta5';
        $pregunta->enunciado = '¿El estudiante tiene congestión nasal o mucosidad?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta6';
        $pregunta->enunciado = '¿El estudiante tiene o ha presentado diarrea en los últimos 7 días?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta7';
        $pregunta->enunciado = 'El estudiante o algún miembro del núcleo familiar ha tenido contacto con algún enfermo por infección respiratoria.';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta8';
        $pregunta->enunciado = '¿El estudiante ha estado en la central de transportes, aeropuerto o ha salido de la ciudad hace menos de 7 días?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta9';
        $pregunta->enunciado = '¿El estudiante ha sido diagnosticado de Covid-19 en los últimos 7 días, o se encuentra en espera de resultado?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta10';
        $pregunta->enunciado = '¿Algún miembro del núcleo familiar ha sido diagnosticado de Covid-19 en los últimos 7 días, o se encuentra en espera de resultado?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta11';
        $pregunta->enunciado = '¿El estudiante ha estado en la urgencia de un centro médico en los últimos 7 días?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta12';
        $pregunta->enunciado = '¿El estudiante ha presentado pérdida del olfato o gusto en los últimos 7 días?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta13';
        $pregunta->enunciado = '¿En su núcleo de vivienda hay algún sintomático respiratorio?';
        $pregunta->tipo = 'radio';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta14';
        $pregunta->enunciado = 'Observaciones generales';
        $pregunta->tipo = 'textbox';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta15';
        $pregunta->enunciado = 'Declaro que todas las respuestas son confiables y verídicas';
        $pregunta->tipo = 'checkbox';
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->nombre = 'pregunta16';
        $pregunta->enunciado = 'Manifiesto que he sido informado sobre el uso que se realizara sobre la información que he suministrado en esta encuesta, la cual es indispensable teniendo en cuenta la emergencia sanitaria Covid-19 decretada por las autoridades. Por ello autorizo al Colegio Idphu para el manejo de la información aportada en esta encuesta, con la cual podrán generar las medidas de promoción y prevención contra el Covid-19.';
        $pregunta->tipo = 'checkbox';
        $pregunta->save();
    }
}
