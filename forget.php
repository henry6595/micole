
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MiCole-familia</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="assests/plugins/bootstrap/css/bootstrap.min.css">
        <!--estilos propios -->
        <link rel="stylesheet" href="assests/plugins/dist/css/styles.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assests/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="assests/plugins/bootstrap/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assests/plugins/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="assests/plugins/iCheck/square/blue.css">

        <link rel="icon" href="assests/images/icon.png">
        <link rel="shortcut icon" href="assests/images/icon.png">

        <!-- Marcador en escritorio de Iphone-->
        <link rel="apple-touch-icon" href="assests/images/icon.png">
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
                <a href="#"><b>Portal MiCole</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg"><b>Recuperar Contraseña </b></p>

                

                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="loginform" accept-charset="utf-8">
                       <div class="form-group has-feedback">
                           Si quieres recuperar tu contraseña olvidada, estás en el lugar indicado.<br>
                           <br>
                           <p align="center">Ingresa tu nombre de usuario</p>
                       </div>
                    <div class="form-group has-feedback">
                        <input id="user" name="user" type="text" class="form-control" placeholder="Usuario" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Continuar</button>
                </form>

                <div align="center"> ¿Ya estás registrado?  <a href="login.php" > Inicia sesión aquí!</a></div>
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

    </body>
</html>