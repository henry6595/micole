<?php

require '../../../../conexionbd/connectDB.php';

$sql = "SELECT * from login l join estudiantes e on e.dni = l.dni join grado g on g.id = e.grado join seccion s on s.id = e.seccion  ";

$result = DBi::$mysqli->query($sql);

$output = array('data' => array());

if ($result->num_rows > 0) {

    while ($row = $result->fetch_array()) {
        $userId = $row[0];
        $dni = $row[8];
        
        if ($row[5] == 0) {
            $button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Accción <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	  <li><a type="button" data-toggle="modal" id="editUserModalBtn" data-target="#editUserModal" onclick="editUser(' . $userId . ')"> <i class="glyphicon glyphicon-edit"></i> Editar</a></li>
	  <li><a type="button" data-toggle="modal" data-target="#inremoveUserModal" id="inremoveUserModalBtn" onclick="inremoveUser(' . $userId . ', ' . $dni . ')"> <i class="glyphicon glyphicon-trash"></i> Desbloquear</a></li>           
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
	  <li><a type="button" data-toggle="modal" data-target="#removeUserModal" id="removeUserModalBtn" onclick="removeUser(' . $userId . ', ' . $dni . ')"> <i class="glyphicon glyphicon-trash"></i> Bloquear</a></li>           
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
            // nombres
            $row[1],
            // Apellidos		
            $row[2],
            //DNI
            $row[8],
            //CORREO
            $row[3],
            //ESTADO
            $estado,
            // GRADO
            $row[20],
            //SECCION
            $row[22],
            //fecha_registro 8
            $formatFI3
        );
    } // /while 
}// if num_rows

DBi::$mysqli->close();

echo json_encode($output);

