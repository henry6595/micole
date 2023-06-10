
<?php 

	$nombre_imagen = $_POST['nombre_imagen'];
        unlink('../'.$nombre_imagen);
	echo true;
 ?>