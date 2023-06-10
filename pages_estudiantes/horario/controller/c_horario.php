<?php
session_start();
require '../../../conexionbd/connectDB.php';

$sql= "select h.curso, h.turno, h.dia, CONCAT(l.nombres,', ',l.apellidos) as docente , d.id from horario h join hora_horario hh on h.turno = CONCAT(hh.hora_inicio,' - ',hh.hora_final) join login l on l.dni = h.docente join dia d on d.descripcion = h.dia where h.grado =".$_SESSION['grado_id']."  order by d.id , hh.orden asc";

$result = DBi::$mysqli->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {
       
        $output['data'][] = array(
            //cursp
            $row[0],
            //turno 
            $row[1],
            //dia 
            $row[2],
            //docente	
            $row[3]
        );
    } // /while 
}// if num_rows

DBi::$mysqli->close();

echo json_encode($output);
