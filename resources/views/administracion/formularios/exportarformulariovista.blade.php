<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombres y Apellidos</th>
            <th>Grados</th>
            <th>Grupos</th>
            <th>fecha de registro</th>
            <th>pregunta 1</th>
            <th>pregunta 2</th>
            <th>pregunta 3</th>
            <th>pregunta 4</th>
            <th>pregunta 5</th>
            <th>pregunta 6</th>
            <th>pregunta 7</th>
            <th>pregunta 8</th>
            <th>pregunta 9</th>
            <th>pregunta 10</th>
            <th>pregunta 11</th>
            <th>pregunta 12</th>
            <th>pregunta 13</th>
            <th>pregunta 14</th>
            <th>pregunta 15</th>
            <th>pregunta 16</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($formularios as $formulario)
            <tr>
                <td>{{ $formulario->estudiante->codigo}}</td>
                <td>{{ $formulario->estudiante->nombre}}</td>
                <td>{{ $formulario->estudiante->grado}}</td>
                <td>{{ $formulario->estudiante->grupo}}</td>
                <td>{{ $formulario->fecha_registro}}</td>
                @foreach ($formulario->preguntas as $pregunta)
                <td>{{ $pregunta->pivot->respuesta}}</td> 
                @endforeach
            </tr>  
            @endforeach
        </tbody>
    </table>

    <table>
        <tr>
            <th>Pregunta</th>
            <th>Enunciado de la pregunta</th>
        </tr>
        @foreach ($preguntas as $pregunta)
        <tr>
            <td>{{$pregunta->id}}</td>
            <td width="240px">{{$pregunta->enunciado}}</td>
        </tr>
        @endforeach
      
    </table>
</body>
</html>