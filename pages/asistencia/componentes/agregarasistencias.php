

<?php

require_once "../../../conexionbd/connectDB.php";
session_start();

$dni = $_SESSION['user_dni'];
$contador = $_POST["contador"];


$cal_grado = $_SESSION['cal_grado'];
$cal_accion = $_SESSION['cal_accion'];


// PARA EL CORREO
require '../../../assests/PHPMailer-master/src/Exception.php';
require '../../../assests/PHPMailer-master/src/PHPMailer.php';
require '../../../assests/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$Mailer = new PHPMailer();
$Mailer->IsSMTP();
$Mailer->isHTML(true);
$Mailer->Charset = 'UTF-8';
$Mailer->SMTPAuth = true;
$Mailer->SMTPSecure = 'tls';
$Mailer->Host = 'smtp.gmail.com';
$Mailer->Port = 587;
$Mailer->Username = 'micole.andresbello@gmail.com';
$Mailer->Password = 'S0porte#3';
$Mailer->From = 'micole.andresbello@gmail.com';
$Mailer->FromName = 'Sistema MiCole';
$Mailer->Subject = 'Notificación de Asistencia';
$foto = "data:image/jpeg;base64,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";
$date = date("d/m/Y");
// DE CORREO
$sql = "call asistencia_delete (CURDATE())";
mysqli_query(DBi::$mysqli, $sql);
while ($contador > 0) {
    $alumno = $_POST["alumno" . $contador];
    $asistencia = $_POST["asistencia" . $contador];
    $correo = $_POST["correo_estudiante" . $contador];
    if ($asistencia == null) {
        $asistencia = 'NOASISTIO';
        $mensaje_correo = 'Su hijo(a) ' . $alumno . ' NO HA ASISTIDO al centro educativo.';
        // inicio de envio de correo


        $message = '<div style="border-radius:15px;  padding: 20px; width:400px;background:#ffffff;border:2px dotted blue;text-align:left" >'
                . '<div style="text-align:left" >'
                . '<img src="' . $foto . '" width="100" height="30">'
                . '<p>'
                . '<font face="verdana" color="black">'
                . 'Estimado Usuario : <br>'
                . 'Recibe una cordial saludo de <strong>MiCole!</strong> <br>'
                . 'Se le notifica lo siguiente : <br>'
                . ' <b>' . $mensaje_correo . '</b><br>'
                . 'Fecha de notificaci&oacute;n : ' . $date . '<br>'
                . '</font>'
                . '</p>'
                . '</div>'
                . '<div style="text-align:right" >'
                . '<font size="1" >Equipo Vyrcorp</font> '
                . '</div>'
                . '</div>';
        $Mailer->msgHTML($message);
        $Mailer->AltBody = 'Notificaciones!';
        $Mailer->AddAddress($correo);
        if ($Mailer->Send()) {
            echo '<script type="text/javascript">
    alertify.success("Notificaciones enviadas");
    </script>';
        } else {

            echo '<script type="text/javascript">
    alertify.error("Notificación no enviada");
    </script>';
        }

        // fin de envio de correo
    } else {
        $asistencia = 'ASISTIO';
    }
    $dni_estudiante = $_POST["dni_estudiante" . $contador];

    $contador = $contador - 1;
    $sql = "call procedimiento_asistencia ('$alumno','$asistencia','$cal_grado',MONTH (NOW()),CURDATE(),'$dni','$dni_estudiante')";
    mysqli_query(DBi::$mysqli, $sql);

    /*
      if ($asistencia == 'NOASISTIO') {
      $mensaje_correo = 'Su hijo(a) NO HA ASISTIDO a clases.';
      } else {
      $mensaje_correo = 'Su hijo(a) ASISTIO a clases.';
      }
     */
}
echo '<script type="text/javascript">
    alertify.success("Notas agregadas Satisfactoriamente");
    </script>';

$sql2 = "INSERT into asistencia_r (grado,mes,fecha) values ('$cal_grado',MONTH (NOW()),CURDATE())";
mysqli_query(DBi::$mysqli, $sql2);



/*header("Location: ../asistencia2.php?grado=" . $_SESSION['cal_grado'] . "&accion='ver notas'&noti=2");*/
?>

<script type="text/javascript">
    var grado = '<?php echo $cal_grado;?>';
    console.log(grado);
    window.location.replace("../asistencia2.php?grado="+grado+"&accion='ver notas'&noti=2");
</script>