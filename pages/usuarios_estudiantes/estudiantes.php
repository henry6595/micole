<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>
<?php
require_once ('componentes/modal/userModal.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Usuarios Estudiantes</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
            <li class="active">Ver Estudiantes</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        <!-- DATA TABLE-->
                        <div class="row">
                            <div class="col-md-3">
                                <label><font color="green">Nombres :</font></label>
                                <input id="inputName" class="form-control" type="text" placeholder="Nombre">
                            </div>
                            <div class="col-md-3">
                                <label><font color="green">Apellidos :</font></label>
                                <input id="inputape" class="form-control" type="text" placeholder="Apellido">
                            </div>

                            <div class="col-md-3">
                                <label><font color="green">Grado :</font></label>
                                <select id="selectRol" onchange="myPillFilter(6, 'selectRol')" class="form-control select2" style="width: 100%;">                      
                                    <option value="">Seleccionar</option>
                                    <?php
                                    $sql = "select id, descripcion from grado where id BETWEEN 16 and 25";
                                    $result = DBi::$mysqli->query($sql);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row[1] . "'>" . $row[1] . "</option>";
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label><font color="green"></font></label>
                                <button id="borrarFiltro" class="buton" name="borrarFiltro" type="button" class="btn btn-success">Reiniciar</button>
                            </div>
                            <style>
                                .buton {
                                    background-color: green;
                                    border: none;
                                    color: white;
                                    padding: 8px 20px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin: 16px 2px;
                                    cursor: pointer;
                                }
                            </style>
                        </div>

                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="page-heading"><i class="glyphicon glyphicon-edit"></i> Listado Usuarios</div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="remove-messages"></div>
                                            <div class="row">
                                                <div class="table-responsive" style="width: 100%;">
                                                    <table class="demo cell-border dataTable" id="manageProductTable" cellspacing="2px;" style="width: 100%;">
                                                        <thead><tr>
                                                                <th class="text-center">Opciones</th>
                                                                <th class="text-center">Nombre</th>
                                                                <th class="text-center">Apellidos</th>
                                                                <th class="text-center">DNI</th>
                                                                <th class="text-center">Correo</th>
                                                                <th class="text-center">Estado</th>
                                                                <th class="text-center">Grado</th>
                                                                <th class="text-center">Sección</th>
                                                                <th class="text-center" >Fecha de Creación</th>
                                                            </tr></thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- FIN DATA TABLE -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box image -->
            </div>
        </div>
    </section>
</div> <!-- content-wrapper -->
<script src="componentes/js/funciones.js"></script> 
<?php
include ('../../includes/footer.php');
?>


