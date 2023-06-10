<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva hora pedagógica</h4>
      </div>
      <div class="modal-body">
        	<label>Hora Inicial</label>
                <input type="text"  placeholder="hh:mm am/pm" name="" id="hora_inicial" class="form-control input-sm">
        	<label>Hora Final</label>
                <input type="text" placeholder="hh:mm am/pm" name="" id="hora_final" class="form-control input-sm">
                <label>Descripci&oacute;n</label>
        	<input type="text" name="" id="descripcion" class="form-control input-sm">
                <label>Orden</label>
                <input type="text" placeholder="ingrese el orden" name="" id="orden" class="form-control input-sm" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idhora_horario" name="">
        	<label>Hora Inicial</label>
        	<input type="text" name="" id="hora_unicialu" class="form-control input-sm">
        	<label>Hora Final</label>
        	<input type="text" name="" id="hora_finalu" class="form-control input-sm">
                <label>Descripci&oacute;n</label>
        	<input type="text" name="" id="descripcionu" class="form-control input-sm">
                <label>Orden</label>
        	<input type="text" name="" id="ordenu" class="form-control input-sm">
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

