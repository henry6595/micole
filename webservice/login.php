<?php

require '../conexionbd/connectDB.php';

$data = file_get_contents('php://input');

$info = json_decode($data);
//echo $info->dni;

$result = mysqli_prepare(DBi::$mysqli, "SELECT * FROM login where dni = ?");
$result->bind_param("s", $info->dni);
$result->execute();
$result->store_result();
if ($result->num_rows == 1) {

    $stmt = mysqli_prepare(DBi::$mysqli, "SELECT l.*,r.rol_name FROM login l join roles_usuarios r on l.rol = r.id where dni = ? and password = ?");
    $stmt->bind_param("ss", $info->dni, $info->password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $value = $result->fetch_assoc();
        if ($value['situacion'] == 1) {
            $output[] = array(
                "estado" => 0,
                "error" => ""
            );
            $json_output = json_encode($output);
            echo $json_output;
        } else {
            $output[] = array(
                "estado" => 1,
                "error" => "Ud. ha sido bloqueado"
            );
            $json_output = json_encode($output);
            echo $json_output;
        }
    } else {
        $output[] = array(
            "estado" => 1,
            "error" => "Su clave es incorrecta."
        );
        $json_output = json_encode($output);
        echo $json_output;
    }
} else {
    $output[] = array(
        "estado" => 1,
        "error" => "Error! no se encuentra registrado"
    );
    $json_output = json_encode($output);
    echo $json_output;
}
?>