<!DOCTYPE html>
<?php
include ('../../conexionbd/session.php');
include ('../../includes/header.php');
include ('../../conexionbd/connectDB.php');
include '../correo/email_nuevo_estudiantes.php';
?>
<?php

function comprobar_email($email) {
    $mail_correcto = 0;
    //compruebo unas cosas primeras 
    if ((strlen($email) >= 6) && (substr_count($email, "@") == 1) && (substr($email, 0, 1) != "@") && (substr($email, strlen($email) - 1, 1) != "@")) {
        if ((!strstr($email, "'")) && (!strstr($email, "\"")) && (!strstr($email, "\\")) && (!strstr($email, "\$")) && (!strstr($email, " "))) {
            //miro si tiene caracter . 
            if (substr_count($email, ".") >= 1) {
                //obtengo la terminacion del dominio 
                $term_dom = substr(strrchr($email, '.'), 1);
                //compruebo que la terminación del dominio sea correcta 
                if (strlen($term_dom) > 1 && strlen($term_dom) < 5 && (!strstr($term_dom, "@"))) {
                    //compruebo que lo de antes del dominio sea correcto 
                    $antes_dom = substr($email, 0, strlen($email) - strlen($term_dom) - 1);
                    $caracter_ult = substr($antes_dom, strlen($antes_dom) - 1, 1);
                    if ($caracter_ult != "@" && $caracter_ult != ".") {
                        $mail_correcto = 1;
                    }
                }
            }
        }
    }
    if ($mail_correcto)
        return 1;
    else
        return 0;
}

$errors = array();
$msj = array();
if ($_POST) {
    $password = strtoupper(DBi::$mysqli->real_escape_string($_POST['password']));
    $nombre = strtoupper(DBi::$mysqli->real_escape_string($_POST['nombre'])); // Escapando caracteres especiales
    $apellido = strtoupper(DBi::$mysqli->real_escape_string($_POST['apellido']));
    $email = strtoupper(DBi::$mysqli->real_escape_string($_POST['email']));
    $temp = strtoupper(DBi::$mysqli->real_escape_string($_POST['pass']));
    $dni = DBi::$mysqli->real_escape_string($_POST['dni']);
    $rol = strtoupper(DBi::$mysqli->real_escape_string($_POST['rol']));
    $datepicker = strtoupper(DBi::$mysqli->real_escape_string($_POST['datepicker']));
    $celular = strtoupper(DBi::$mysqli->real_escape_string($_POST['celular']));
    $telefono = strtoupper(DBi::$mysqli->real_escape_string($_POST['telefono']));
    $direccion = strtoupper(DBi::$mysqli->real_escape_string($_POST['direccion']));
    $grado = strtoupper(DBi::$mysqli->real_escape_string($_POST['grado']));
    $seccion = strtoupper(DBi::$mysqli->real_escape_string($_POST['seccion']));

    $rpta = comprobar_email($email);

    $sql = "SELECT * FROM login WHERE dni = '$dni'";


    $result = DBi::$mysqli->query($sql);
    $rows = $result->num_rows;
    //echo $rows;

    if ($password != $temp) {
        $errors[] = "Las contraseñas no coinciden";
    } else {
        if ($rpta == 0) {
            $errors[] = "El formato de email no es correcto";
        } else {
            if ($rows >= 1) {
                $errors[] = "El usuario ya existe";
            } else {

                $sql = "call registrar_estudiantes('$password','$nombre','$apellido','$email','7','$dni','$datepicker','$celular','$telefono','$direccion','$grado','$seccion')";


                if (DBi::$mysqli->query($sql) === TRUE) {
                    ?>

                    <?php
                    $correoenviado = enviar_correos_estudiantes($nombre .' '. $apellido, $password, ' estudiante', $email);
                    echo '<script type="text/javascript">
                        alertify.success("Usuario creado con exito");
                        </script>';
                } else {
                    echo '<script type="text/javascript">
                        alertify.error("Error! por favor revise bien los datos");
                        </script>';
                }
            }
        }
    }
}
?>
<!-- ******<div class="content-wrapper">
   CUERPO DEL PROGRAMAAAAAA *******************************************-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1> <i class='fa fa-edit'></i> <big><u>Registrar Estudiantes</u></big></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
            <li class="active">Registrar Estudiantes</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!-- Profile Image -->
                <div class="box box-success">
                    <div class="box-body box-profile">
                        <div class="row">


                            <div class="col-md-12">
                                <div class="nav-tabs-custom">

                                    <div class="tab-content">
                                        <div class="messages">
                                            <?php
                                            if ($errors) {
                                                foreach ($errors as $key => $value) {
                                                    echo '<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									' . $value . '</div>';
                                                }
                                            }

                                            if ($msj) {
                                                foreach ($msj as $key => $value) {
                                                    echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>
									<i class="glyphicon glyphicon-ok"></i>
									' . $value . '</div>';
                                                }
                                            }
                                            ?>
                                        </div>

                                        <div class="tab-pane fade in active" id="info1">                 
                                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"  class="form-horizontal" method="POST" id="loginform" accept-charset="utf-8">


                                                <div class="form-group ">     
                                                    <label class="col-sm-3 control-label">Nombres</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="nombre" name="nombre"autocomplete="off" placeholder="Ingresar Nombre"  required> 
                                                    </div>
                                                </div> 

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Apellidos</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresar Apellidos" autocomplete="off"  required>
                                                    </div>
                                                </div> 

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">DNI</label>
                                                    <div class="col-sm-6">
                                                        <input  type="number"  class="form-control" id="dni" name="dni" placeholder="Ingresar DNI" autocomplete="off"  required maxlength="8">    
                                                    </div>
                                                </div> 

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Contraseña</label>
                                                    <div class="col-sm-6">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar Contraseña" autocomplete="off" required>
                                                    </div>
                                                </div> 

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Confirmar Contraseña</label>
                                                    <div class="col-sm-6">
                                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Confirmar Contraseña"  autocomplete="off" required>
                                                    </div>
                                                </div> 

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Rol de Usuario</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="rol" name="rol" value="Estudiante" autocomplete="off"  readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Grado</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2" id="grado" name="grado" style="width: 100%;">
                                                            <option value="">Seleccionar</option>
                                                            <?php
                                                            $sql = "select id,descripcion from grado";
                                                            $result = DBi::$mysqli->query($sql);
                                                            while ($row = $result->fetch_array()) {
                                                                echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                                            }
                                                            ?> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Sección</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2" id="seccion" name="seccion" style="width: 100%;">
                                                           <option value="">Seleccionar</option>
                                                            <?php
                                                            $sql = "select id,descripcion from seccion";
                                                            $result = DBi::$mysqli->query($sql);
                                                            while ($row = $result->fetch_array()) {
                                                                echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                                            }
                                                            ?> 
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Correo</label>
                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com"  autocomplete="off" required>    
                                                    </div>
                                                </div> 

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Fecha de Nacimiento</label>
                                                    <div class="col-sm-6 controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="datepicker" data-link-format="dd/mm/yyyy"  required>
                                                        <div class="input-prepend input-group">
                                                            <span class="add-on input-group-addon">
                                                                <i class="fa fa-calendar"></i></span>
                                                            <input class="form-control" type="text" id="datepicker" name="datepicker" required readonly/>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Celular</label>
                                                    <div class="col-sm-6">
                                                        <input  type="number"  class="form-control" id="celular" name="celular" placeholder="Ingresar celular" autocomplete="off" required maxlength="9">
                                                    </div>
                                                </div> 
                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Tel&eacute;fono</label>
                                                    <div class="col-sm-6">
                                                        <input  type="number"  class="form-control" id="telefono" name="telefono" placeholder="Ingresar telefono" autocomplete="off" required maxlength="7" >
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="col-sm-3 control-label">Direcci&oacute;n</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresar direccion"  autocomplete="off" required >
                                                    </div>
                                                </div> 

                                                <div class="form-group">
                                                    <div class="col-sm-offset-7 col-md-6">                             
                                                        <button type="submit" id='validate' class="btn btn-primary">Registrarme</button>    
                                                    </div>
                                                </div> 

                                            </form>
                                        </div>
                                    </div><!-- /.nav-tabs-custom --> 
                                </div> <!-- /.col md9 -->
                            </div>	<!-- /.row -->
                        </div>	<!-- /.row -->
                    </div>
                </div>
                <!-- /.box image -->
            </div>
        </div>
    </section><!-- /.content -->

</div> <!-- content-wrapper  -->

<script type="text/javascript">

    $('.form_date').datetimepicker({
        language: 'es',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });

</script>
<?php
include ('../../includes/footer.php');
?>
