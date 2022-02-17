<div>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ventanaModal2">
        <i class="fas fa-user p-1"></i>Subir Estudiantes
    </button>
<div wire:ignore.self class="modal face" id="ventanaModal2" tabindex="-2" role="dialog" aria-labelledby="tituloVentana2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">    
                <div class="modal-header">
                    <h5 id="tituloVentana2">Subir Usuarios</h5>
                    <button class="close" data-dismiss="modal" arial-label="cerrar">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6><strong>el archivo tiene que ser csv</strong></h6>
                    <div class="p-4">
                        <input type="file" wire:model="usuarios" accept=".zip" id="upload{{$iteration}}">
                        <br><a href="https://docs.google.com/spreadsheets/d/1JlNfrWsCUo319iL-8DvHbmwfmIAlIEHi/edit?usp=sharing&ouid=110976866199380732119&rtpof=true&sd=true" target="_blank">Ver formato para subir usuarios</a>
                    </div>
                    <div class="alert alert-danger text-end"  wire:loading wire:target="usuarios" style="display:none">
                        por favor espere
                    </div>
                    <strong>{{$resultado2}}</strong>                      
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" wire:click="reiniciarusuario()">
                        Cerrar
                    </button>
                    <button class="btn btn-success" wire:loading.attr="disabled" wire:target="subirestudiantes, usuarios" type="button" wire:click="subirestudiantes">
                        Subir Usuarios
                    </button>
                </div>
        </div>
    </div>
</div>
</div>
