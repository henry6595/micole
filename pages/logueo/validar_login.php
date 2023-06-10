<?php

function validar_errores($dni, $password) {
    $errors = array();
    if (empty($dni) || empty($password)) {
        if ($dni == "") {
            array_push($errors, "Se requiere ingresar DNI");
        }
        if ($password == "") {
            array_push($errors, "Se requiere ingresar contraseña");
        }
    } else {
//        $errors[] = valida_db($dni, $password);
//        array_push($errors, $dni);
//        array_push($errors, $password);
        $errors_db = valida_db($dni, $password);
        foreach ($errors_db as $value) {
            array_push($errors, $value);
        }
    }
    return $errors;
}

function valida_db($dni, $password) {
    //$mysqli = db_connect();
    $errors_db = array();
    $result = mysqli_prepare(DBi::$mysqli, "SELECT * FROM login where dni = ?");
    $result->bind_param("s", $dni);
    /* ejecutar la consulta */
    $result->execute();
    /* almacenar el resultado */
    $result->store_result();
    if ($result->num_rows == 1) {
        $stmt = mysqli_prepare(DBi::$mysqli, "SELECT l.*,r.rol_name FROM login l join roles_usuarios r on l.rol = r.id where dni = ? and password = ?");
        $stmt->bind_param("ss", $dni, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            $value = $result->fetch_assoc();
            if ($value['situacion'] == 1) {

                $_SESSION['user_nombres'] = $value['nombres'];
                $_SESSION['user_apellidos'] = $value['apellidos'];
                $_SESSION['user_email'] = $value['email'];
                $_SESSION['user_password'] = $value['password'];
                $_SESSION['user_dni'] = $value['dni'];
                $_SESSION['user_rol'] = $value['rol'];
                $_SESSION['user_rol_nombre'] = $value['rol_name'];
                $_SESSION['user_celular'] = $value['celular'];
                if ($_SESSION['user_rol'] == 7) {
                    $mainSql = 'SELECT g.id, g.descripcion from estudiantes e join grado g on g.id = e.grado where e.dni = ' . $_SESSION['user_dni'] ;
                    $mainResult = DBi::$mysqli->query($mainSql);
                    $value = $mainResult->fetch_assoc();
                    $grado_id = $value['id'];
                    $grado_descripcion = $value['descripcion'];
                    $_SESSION['grado_id'] = $grado_id;
                    $_SESSION['grado_descripcion'] = $grado_descripcion;
                    echo "<script> window.location='pages_estudiantes/noticias/noticias_v.php'; </script>";
                } else {
                    echo "<script> window.location='pages/noticias/noticias.php'; </script>";
                }
            } else {
                array_push($errors_db, 'Ud. ha sido bloqueado');
            }
        } else {
            array_push($errors_db, 'Su clave es incorrecta.');
        }
    } else {
        array_push($errors_db, 'Error! no se encuentra registrado');
    }


    return $errors_db;
}
