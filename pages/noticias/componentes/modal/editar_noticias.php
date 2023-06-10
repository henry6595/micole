<div class="modal fade" id="modalEditarNoticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-content" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Actualizar noticia</h4>
            </div>
            <div class="modal-body">
                <input type="text" hidden="" id="e_id" name="">
                <label>Titulo</label>
                <input type="text" name="" id="e_titulo" class="form-control input-sm">
                <label>palabra clave</label>
                <input type="text" name="" id="e_palabra_clave" class="form-control input-sm">
                <label>descripción</label>
                <textarea rows="10" cols="50"  id="e_descripcion" class="form-control "></textarea>
                <label>nombre imagen</label>
                <a href="#" data-toggle="tooltip" title="copia y pega el nombre de la imagen de la galeria"><i style="color: #1E64B2" class="glyphicon glyphicon-question-sign"></i></a>
                <input type="text" name="" id="e_nombre_imagen" class="form-control input-sm">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
                    Actualizar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>