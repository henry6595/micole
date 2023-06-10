<?php
session_start();?>
<?php
include ("conexionbd/connectDB.php");
require 'pages/logueo/validar_login.php';
$errores = array();
if ($_POST) {
    $dni = DBi::$mysqli->real_escape_string($_POST['dni']); // Escapando caracteres especiales
    $password = DBi::$mysqli->real_escape_string($_POST['password']);
    $errores = validar_errores($dni, $password);
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MiCole-familia</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="assests/plugins/bootstrap/css/bootstrap.min.css">
        <!--estilos propios -->
        <link rel="stylesheet" href="assests/plugins/dist/css/styles.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="assests/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="assests/plugins/bootstrap/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assests/plugins/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="assests/plugins/iCheck/square/blue.css">

        <link rel="icon" href="assests/images/icon.PNG">
        <link rel="shortcut icon" href="assests/images/icon.PNG">

        <!-- Marcador en escritorio de Iphone-->
        <link rel="apple-touch-icon" href="assests/images/icon.PNG">
    </head>
    <body class="hold-transition login-page" STYLE="background-color:#1E64B2">


        <!-- inicio cabecera -->
        <header>
            <div class="container">
                <figure class="inventariapp-logo-container pull-left">
                    <a href="../MiCole/"><img class="inventariapp-logo img-responsive" src="assests/images/logo.JPG" width="200" height="200" ></a>
                </figure>
            </div>
        </header>
        <!-- fin cabecera -->



        <div class="login-box">
            <div  class="login-logo">
                <font color="white"><b>Portal MiCole</b></font>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                
                <p class="login-box-msg"><font face = "Comic sans MS" size =" 5"><u><b> Iniciar sesión </b></u></font></p>

                <div class="messages">
                    <?php
                    if ($errores) {
                        foreach ($errores as $key => $value) {
                            echo '<div class="alert alert-warning alert-dismissable" role="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									' . $value . '</div>';
                        }
                    }
                    ?>
                </div>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="loginform">                                     
                    <div class="form-group has-feedback">
                        <input id="dni" name="dni" type="text" class="form-control" placeholder="dni">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <div class="input-group">
                            <input name="password" id="password" type="password" class="form-control" placeholder="contraseña">
                            <span class="input-group-btn">
                                <button id="ver" class="btn btn-default" type="button" onclick="mostrarContrasena()"> ver </button>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                        </div>
                    </div>
                </form>

                <!-- /.social-auth-links -->

                <a href="forget.php" class="text-center">Olvidaste tu contraseña</a>
            </div>

        </div>

        <!-- jQuery 2.2.3 -->
        <script src="assests/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="assests/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="assests/plugins/iCheck/icheck.min.js"></script>
        <script>
                                    $(function () {
                                        $('input').iCheck({
                                            checkboxClass: 'icheckbox_square-blue',
                                            radioClass: 'iradio_square-blue',
                                            increaseArea: '20%' // optional
                                        });
                                    });

        </script>

        <script>
            function mostrarContrasena() {
                var tipo = document.getElementById("password");
                if (tipo.type == "password") {
                    tipo.type = "text";
                    document.getElementById("ver").innerHTML = "Ocultar";
                } else {
                    tipo.type = "password";
                    document.getElementById("ver").innerHTML = "ver";
                }
            }
        </script>
    </body>
</html>
