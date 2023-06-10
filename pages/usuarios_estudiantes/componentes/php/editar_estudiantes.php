<?php
require '../../../../conexionbd/connectDB.php';

$valid['success'] = array('success' => false, 'messages' => array());
if ($_POST) {
    $userId = $_POST['userId'];
    $nombres = $_POST['editName'];
    $apellidos = $_POST['editApellido'];
    $dni = $_POST['editDNI'];
    $celular = $_POST['editCelular'];
    $telefono = $_POST['editTelefono'];
    $direccion = $_POST['editDireccion'];
    $correo = $_POST['editCorreo'];
    $status = $_POST['editStatus'];
    $rol = $_POST['editRol'];
    $grado = $_POST['editGrado'];
    $seccion = $_POST['editSeccion'];

    $sql = "Call editUser_estudiante('$userId','$nombres','$apellidos','$dni','$celular','$telefono','$direccion','$correo','$status','$rol','$grado','$seccion')";
    
    if (DBi::$mysqli->query($sql) === TRUE) {

        $valid['success'] = true;
        $valid['messages'] = "Actualizado exitosamente";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error no se ha podido actualizar";
    }

} // /$_POST

DBi::$mysqli->close();

echo json_encode($valid);

