<?php

require '../../../../conexionbd/connectDB.php';

$sql = "SELECT * from login l join roles_usuarios r on r.ID = l.rol where l.rol BETWEEN 1 and 6";

$result = DBi::$mysqli->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {
        $userId = $row[0];
        if ($row[5] == 0) {
            $button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Accción <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	  <li><a type="button" data-toggle="modal" id="editUserModalBtn" data-target="#editUserModal" onclick="editUser(' . $userId . ')"> <i class="glyphicon glyphicon-edit"></i> Editar</a></li>
	  <li><a type="button" data-toggle="modal" data-target="#inremoveUserModal" id="inremoveUserModalBtn" onclick="inremoveUser(' . $userId . ')"> <i class="glyphicon glyphicon-trash"></i> Desbloquear</a></li>           
</ul>
        </div>';
        } else {
            $button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Accción <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	  <li><a type="button" data-toggle="modal" id="editUserModalBtn" data-target="#editUserModal" onclick="editUser(' . $userId . ')"> <i class="glyphicon glyphicon-edit"></i> Editar</a></li>
	  <li><a type="button" data-toggle="modal" data-target="#removeUserModal" id="removeUserModalBtn" onclick="removeUser(' . $userId . ')"> <i class="glyphicon glyphicon-trash"></i> Bloquear</a></li>           
</ul>
        </div>';
        }
        $myDate3 = new DateTime($row[7]);
        $formatFI3 = $myDate3->format('d/m/Y');
        if ($row[5] == 1) {
            $estado = '<span class="label label-success">Activo</span>';
        } else {
            $estado = '<span class="label label-danger">Bloqueado</span>';
        }

        $output['data'][] = array(
            //button0
            $button,
            // nombres2		
            $row[1],
            //apell	3
            $row[2],
            //dni 4
            $row[8],
            //email	5	
            $row[3],
            // situacion 6
            $estado,
            //rol7
            $row[14],
            //fecha_registro 8
            $formatFI3
        );
    } // /while 
}// if num_rows

DBi::$mysqli->close();

echo json_encode($output);

