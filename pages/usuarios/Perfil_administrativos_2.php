<?php
session_start();
include ('../../conexionbd/connectDB.php');


$celular = DBi::$mysqli->real_escape_string($_POST['celular']); // Escapando caracteres especiales
$email = DBi::$mysqli->real_escape_string($_POST['email']);
$password = DBi::$mysqli->real_escape_string($_POST['password']);
$dni = DBi::$mysqli->real_escape_string($_POST['iddni']);

$sql = "UPDATE login SET celular='$celular', email='$email', password='$password' WHERE dni = '$dni'";
if (DBi::$mysqli->query($sql) === TRUE) {
   
    $_SESSION['user_email'] = $email;
    $_SESSION['user_celular'] = $celular;
    $_SESSION['user_password'] = $password;
    echo "<script> window.location='Perfil_administrativos_1.php?noti=1'; </script>";
    
} else {
    echo '<script type="text/javascript">
    alert("No se ha modificado los cambios");
    </script>';
}
?>