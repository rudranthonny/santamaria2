<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card">
                <h3 class="text-center mb-4">Bienvenido al Colegio IDPHU Bilingüe de Santa Marta</h3>
                <center><img src="{{ asset('imagenes/logo.png') }}" width="100px" height="100px" alt=""></center>
                <hr>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <input type="text"  wire:model="codigo_estudiante" placeholder="Escribe el codigo del estudiante"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <button type="submit" class="btn-block btn-primary" wire:click="buscarestudiante()">Buscar Estudiante</button> </div>
                        @if ($mensaje3 != "")
                        <div class="form-group col-sm-12 flex-column d-flex alert alert-success">{{$mensaje3}}</div>
                        @endif
                        @if ($mensaje != "")
                        <div class="form-group col-sm-12 flex-column d-flex alert alert-danger">{{$mensaje}}</div>
                        @endif
                    </div>
                    @if ($estudiante != null)
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> Nombre del Estudiante : {{$estudiante->nombre." ".$estudiante->ap_paterno." ".$estudiante->ap_materno}}</div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> Grado : {{$estudiante->grado}}</div>
                        <div class="form-group col-sm-12 flex-column d-flex"> Grupo : {{$estudiante->grupo}}</div>
                    </div>
                    @foreach ($preguntas as $pregunta)
                    @if ($pregunta->tipo == "radio")
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex">{{$pregunta->enunciado}}</div>
                        <div class="form-group col-sm-12 flex-column d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pregunta-{{$pregunta->id}}" id="a-pregunta-{{$pregunta->id}}" value="no"  wire:model='datos.{{$pregunta->id}}'>
                                <label class="form-check-label" for="a-pregunta-{{$pregunta->id}}">
                                  no
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="pregunta-{{$pregunta->id}}" id="b-pregunta-{{$pregunta->id}}" value="si" wire:model='datos.{{$pregunta->id}}'>
                                <label class="form-check-label" for="b-pregunta-{{$pregunta->id}}">
                                  si
                                </label>
                              </div>
                        </div>
                    </div>   
                    @elseif($pregunta->tipo == "textbox")
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex">
                            <label for="exampleFormControlTextarea1" class="form-label">{{$pregunta->enunciado}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model='datos.{{$pregunta->id}}'></textarea>
                        </div>
                    </div>
                    @elseif($pregunta->tipo == "checkbox")
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="si" id="flexCheckDefault" wire:model='datos.{{$pregunta->id}}'>
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$pregunta->enunciado}}
                                </label>
                              </div>
                        </div>
                    </div>
                    @endif 
                    @endforeach
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-12"> <button class="btn-block btn-primary" wire:click="registra_estudiante()">Enviar Formulario
                            </button> 
                        </div>
                        @if ($mensaje2 != "")
                        <div class="alert alert-danger">
                            {{$mensaje2}}
                        </div>
                        @endif
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>