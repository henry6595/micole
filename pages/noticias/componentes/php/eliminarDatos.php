
<?php

require '../../../../conexionbd/connectDB.php';
$id = $_POST['id'];
$sql = "DELETE from noticias where id='$id'";
echo $result = mysqli_query(DBi::$mysqli, $sql);
?>