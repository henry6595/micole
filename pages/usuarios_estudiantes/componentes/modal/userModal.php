
<!-- edit categories brand -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Editar Escolares</h4>
            </div>

            <div class="modal-body" style="max-height:650px; overflow:auto;">

                <div class="div-result">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Info1" aria-controls="home" role="tab" data-toggle="tab">Usuario</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Info1">
                            <form action="../usuarios_estudiantes/componentes/php/editar_estudiantes.php" method="POST" id="editUserForm" class="form-horizontal">
                                <div id="edit-user-messages"></div>
                                <br/>
                                <div class="form-group">                                 
                                    <label for="editName" class="col-sm-3 control-label">Nombre: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="editName" placeholder="Nombre del Usuario" name="editName" autocomplete="off" required>
                                    </div>
                                </div> <!-- /form-group1-->	     	           	       

                                <div class="form-group">
                                    <label for="editApellido" class="col-sm-3 control-label">Apellidos: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="editApellido" placeholder="Apellido del Usuario" name="editApellido" autocomplete="off" required>
                                    </div>
                                </div> <!-- /form-group2-->

                                <div class="form-group">
                                    <label for="editDNI" class="col-sm-3 control-label">DNI: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="editDNI" placeholder="Usuario" name="editDNI" autocomplete="off" required>
                                    </div>
                                </div>   <!-- /form-group3-->     

                                <div class="form-group">
                                    <label for="editCelular" class="col-sm-3 control-label">Celular: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="editCelular" placeholder="Celular" name="editCelular" autocomplete="off" required>
                                    </div>
                                </div>  <!-- /form-group4-->  

                                <div class="form-group">
                                    <label for="editTelefono" class="col-sm-3 control-label">Tel&eacute;fono: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="editTelefono" placeholder="Telefono" name="editTelefono" autocomplete="off" required>
                                    </div>
                                </div>  <!-- /form-group4--> 
                                <div class="form-group">
                                    <label for="editDireccion" class="col-sm-3 control-label">Direcci&oacute;n : </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="editDireccion" placeholder="Direccion" name="editDireccion" autocomplete="off" required>
                                    </div>
                                </div>  <!-- /form-group4--> 
                                <div class="form-group">
                                    <label for="editCorreo" class="col-sm-3 control-label">Correo: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="editCorreo" placeholder="Correo" name="editCorreo" autocomplete="off" required>
                                    </div>
                                </div>   <!-- /form-group3-->  

                                <div class="form-group">
                                    <label for="editStatus" class="col-sm-3 control-label">Situacion: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="editStatus" name="editStatus" style="width: 100%;" required>
                                            <option value="">Seleccionar</option>
                                            <option value="1">Activo</option>
                                            <option value="0">Bloqueado</option>
                                        </select>
                                        <!--input type="text" class="form-control" id="editSerie" placeholder="Serie" name="editSerie" autocomplete="off" required-->
                                    </div>
                                </div> <!-- /form-group5-->   

                                <div class="form-group">
                                    <label for="editRol" class="col-sm-3 control-label">Rol: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="editRol" name="editRol" style="width: 100%;" required>
                                            <option value="">Seleccionar</option>
                                            <?php
                                            $sql = "select ID,rol_name from roles_usuarios ru";
                                            $result = DBi::$mysqli->query($sql);
                                            while ($row = $result->fetch_array()) {
                                                echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                            }
                                            ?> 
                                        </select>
                                        <!--input type="text" class="form-control" id="editSerie" placeholder="Serie" name="editSerie" autocomplete="off" required-->
                                    </div>
                                </div> <!-- /form-group5-->   
                                <div class="form-group">
                                    <label for="editGrado" class="col-sm-3 control-label">Grado : </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="editGrado" name="editGrado" style="width: 100%;" required>
                                            <option value="">Seleccionar</option>
                                            <?php
                                            $sql = "select id,descripcion from grado";
                                            $result = DBi::$mysqli->query($sql);
                                            while ($row = $result->fetch_array()) {
                                                echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                            }
                                            ?> 
                                        </select>
                                        <!--input type="text" class="form-control" id="editSerie" placeholder="Serie" name="editSerie" autocomplete="off" required-->
                                    </div>
                                </div> <!-- /form-group5-->   
                                <div class="form-group">
                                    <label for="editSeccion" class="col-sm-3 control-label">Secci&oacute;n: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="editSeccion" name="editSeccion" style="width: 100%;" required>
                                            <option value="">Seleccionar</option>
                                            <?php
                                            $sql = "select id,descripcion from seccion";
                                            $result = DBi::$mysqli->query($sql);
                                            while ($row = $result->fetch_array()) {
                                                echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                            }
                                            ?> 
                                        </select>
                                        <!--input type="text" class="form-control" id="editSerie" placeholder="Serie" name="editSerie" autocomplete="off" required-->
                                    </div>
                                </div> <!-- /form-group5-->   

                                <div class="modal-footer editUserFooter">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cerrar</button>
                                    <button type="submit" class="btn btn-success" id="editUserBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Guardar cambios</button>
                                </div>
                                <!-- /modal-footer -->
                            </form>
                            <!-- /form -->
                        </div>

                        <!-- /product info -->
                    </div>

                </div>

            </div> <!-- /modal-body -->
        </div>
        <!-- /modal-content -->
    </div>
    <!-- /modal-dailog -->
</div>
<!-- /categories brand -->


<!-- remover -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeUserModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Bloquear Usuario</h4>
            </div>
            <div class="modal-body">

                <div class="removeUserMessages"></div>

                <p>Realmente deseas bloquear el usuario?</p>
            </div>
            <div class="modal-footer removeUserFooter">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cancelar</button>
                <button type="button" class="btn btn-primary" id="removeUserBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Bloquear</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- regresar despues de remover -->
<div class="modal fade" tabindex="-1" role="dialog" id="inremoveUserModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Desloquear Usuario</h4>
            </div>
            <div class="modal-body">

                <div class="removeUserMessages"></div>

                <p>Realmente deseas desbloquear el usuario?</p>
            </div>
            <div class="modal-footer removeUserFooter">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cancelar</button>
                <button type="button" class="btn btn-primary" id="inremoveUserBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Desbloquear</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->