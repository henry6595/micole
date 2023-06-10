<div class="modal fade" id="modalEdicion_horario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Actualizar Horario:</h4>
            </div>
            <div class="modal-body">
                <input type="text" hidden="" id="id_horario" name="">
                <label>Turno</label>
                <input type="text" name="" id="turnou" class="form-control input-sm" disabled>
                <br>
                <label>Curso</label>
                <select class="form-control select2" id="cursou" name="cursou" style="width: 100%;" required>
                    <option value="">Selecciona</option>
                    <option value="recreo">RECREO</option>
                    <?php
                    $sql = "SELECT distinct curso from cursos order by curso";
                    $result = DBi::$mysqli->query($sql);
                    while ($row = $result->fetch_array()) {
                        echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                    } // while
                    ?>                                           
                </select>
                <br><br>
                <label>Docente</label>
                <select class="form-control select2" id="docenteu" name="docenteu" style="width: 100%;" required>
                    <option value="">Selecciona</option>
                    <?php
                    $sql = "select l.dni,CONCAT(l.apellidos,' ,',l.nombres) from login l where l.rol=4 and l.situacion=1 order by l.apellidos";
                    $result = DBi::$mysqli->query($sql);
                    while ($row = $result->fetch_array()) {
                        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                    } // while
                    ?>                                           
                </select>
                <br><br>
                <label>Grado</label>
                <input type="text" name="" id="gradou" class="form-control input-sm" disabled>
                <br>
                <label>d&iacute;a</label>
                <input type="text" name="" id="diau" class="form-control input-sm" disabled>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="actualizadatos_horario" data-dismiss="modal">Actualizar</button>

            </div>


        </div>
    </div>
</div>


