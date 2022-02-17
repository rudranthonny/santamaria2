<?php

namespace App\Imports;

use App\Models\Estudiante;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class EstudianteImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {   
        $contador = 0;
        foreach ($rows as $row) 
        {   
            $contador = $contador +1;
            if ($contador == 1) {
            # code...
            } 
            else {
               
                Estudiante::create([
                'codigo'=> $row[0],
                'nombre'=> $row[1],
                'ap_paterno' => $row[2],
                'ap_materno' => $row[3],
                'grado' => $row[4],
                'grupo' => $row[5],
                ]);
            }
        }
    }
}
