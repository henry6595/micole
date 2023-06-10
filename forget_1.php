<?php 
echo date("Y-m-d");

$fecha = date('Y-m-d');
$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
 
echo $nuevafecha;
?>