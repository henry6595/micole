<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
?>

<!-- ******   CUERPO DEL PROGRAMAAAAAA *******************************************-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Mis Calificaciones</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Calificaciones</a></li>
            <li class="active">Calificaciones de cursos</li>
        </ol> 
    </section>

    <br>
    <!--tabla producots-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="row">
                        <div class="col-md-3">
                            <label><font color="black">Curso :</font></label>
                            <select id="selectCurso" onchange="myPillFilter(0, 'selectCurso')" class="form-control select2" style="width: 100%;">                      
                                <option value="">Seleccionar</option>
                                <?php
                                $sql = "select DISTINCT c.curso from calificaciones c where c.dni_estudiante='" . $_SESSION['user_dni'] . "' and c.grado=" . $_SESSION['grado_id'] . "";

                                $result = DBi::$mysqli->query($sql);
                                while ($row = $result->fetch_array()) {
                                    echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                } // while
                                ?>    
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label><font color="black">Tipo :</font></label>
                            <select id="selecttipo" onchange="myPillFilter2(1, 'selecttipo')" class="form-control select2" style="width: 100%;">                      
                                <option value="">Seleccionar</option>
                                <?php
                                $sql = "select DISTINCT c.tipo from calificaciones c where c.dni_estudiante='" . $_SESSION['user_dni'] . "' and c.grado=" . $_SESSION['grado_id'] . "";

                                $result = DBi::$mysqli->query($sql);
                                while ($row = $result->fetch_array()) {
                                    echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                                } // while
                                ?>   
                            </select>
                        </div>

                    </div>


                    <br>
                    <div class="row">
                        <div class="col-md-12">
                         
                                <!-- Boton agregar excel -->
                                <div class="panel-body">

                                    <div class="remove-messages"></div>

                                    <div class="row">
                                        <div class="table-responsive" style="width: 100%;">
                                            <table style="text-align: center;" class="demo cell-border dataTable" id="manageProductTable" cellspacing="2px;" style="width: 100%;">
                                                <thead><tr>
                                                        <th class="text-center">Curso</th>
                                                        <th class="text-center">tipo de Evaluación</th>
                                                        <th class="text-center">Nota</th>
                                                        <th class="text-center">Fecha de Evaluación</th>

                                                    </tr></thead>
                                            </table>
                                        </div><!--fin_tabla-->
                                    </div>
                                </div><!--panel-body-->
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div>
            </div>
        </div>
    </section>





</div>
<script>
    $(document).ready(function () {

        manageProductTable = $('#manageProductTable').DataTable({
            dom: 'Blrtip',
            'ajax': 'controller/c_calificaciones.php',
            "buttons": [
                {extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    },
                    filename: 'calificaciones'
                }
            ]

        });


    }); // document.ready fucntion

    function myPillFilter(col, id) {
        var data = document.getElementById(id).value;
        manageProductTable.columns(col).search(data).draw();

    }
    function myPillFilter2(col, id) {
        var data = document.getElementById(id).value;
        manageProductTable.columns(col).search(data).draw();

    }
</script>
<?php include ('../../includes/footer.php'); ?>



