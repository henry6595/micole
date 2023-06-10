<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Las noticias</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Noticias</a></li>
            <li class="active">Ver noticias</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        <section  class="col-md-12 col-sm-12 col-xs-12 ">
                            <div id="galeria_noticias"></div>
                        </section>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box image -->
            </div>
        </div>
    </section>
</div> <!-- content-wrapper -->

<?php
include ('componentes/modal/ver_noticias.php');
include ('../../includes/footer.php');
?>
<script type="text/javascript">

    $(document).ready(function () {
        $('#galeria_noticias').load('componentes/galeria_noticias.php');
    });
</script>
