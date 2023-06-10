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
        <h1> <i class='fa fa-edit'></i> <big><u>Mis estadisticas: 6to grado de secundaria</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Calificaciones</a></li>
            <li class="active">estadisticas</li>
        </ol> 
    </section>

    <br>
    <!--tabla producots-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <center>
                   <div id="piechart" style="width: 900px; height: 500px;"></div>
                    </center>
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



