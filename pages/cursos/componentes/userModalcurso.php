<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo curso</h4>
      </div>
      <div class="modal-body">
        	<label>Curso</label>
                <input type="text"  placeholder="curso" name="" id="curso" class="form-control input-sm">
                <label>Descripci&oacute;n</label>
                <input type="text" placeholder="decripcion" name="" id="descripcion" class="form-control input-sm">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo_curso">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion_cursos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar cursos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idcurso_edt" name="">
        	<label>Curso</label>
        	<input type="text" name="" id="cursoc" class="form-control input-sm">
                <label>Descripci&oacute;n</label>
        	<input type="text" name="" id="descripcionc" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizacursos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>


