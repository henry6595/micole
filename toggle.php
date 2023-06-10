<!DOCTYPE html>
<html>
<head>
    <link href="assests/toggle/css/bootstrap-toggle.css" rel="stylesheet">
        <link href="assests/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="assests/librerias/jquery-3.2.1.min.js"></script>
</head>
<body>
    <?php
   $dia = getdate()['wday'];
   if ($dia==0){
       $dia_texto = "Domingo";
   }
   if ($dia==1){
       $dia_texto = "Lunes";
   }
   if ($dia==2){
       $dia_texto = "Martes";
   }
   if ($dia==3){
       $dia_texto = "Miercoles";
   }
   if ($dia==4){
       $dia_texto = "Jueves";
   }
   if ($dia==5){
       $dia_texto = "Viernes";
   }
   if ($dia==6){
       $dia_texto = "Sabado";
   }
   /* MESES */
     $mes = getdate()['mon'];
   if ($mes==1){
       $mes_texto = "Enero";
   }
   if ($mes==2){
       $mes_texto = "Febrero";
   }
   if ($mes==3){
       $mes_texto = "Marzo";
   }
   if ($dia==4){
       $mes_texto = "Abril";
   }
   if ($mes==5){
       $mes_texto = "Mayo";
   }
   if ($mes==6){
       $mes_texto = "Junio";
   }
   if ($mes==7){
       $mes_texto = "Julio";
   }
   if ($mes==8){
       $mes_texto = "Agosto";
   }
   if ($mes==9){
       $mes_texto = "Setiembre";
   }
   if ($mes==10){
       $mes_texto = "Octubre";
   }
   if ($mes==11){
       $mes_texto = "Noviembre";
   }
    if ($mes==12){
       $mes_texto = "Diciembre";
   }
   $fecha_larga = $dia_texto.", ".getdate()['mday']." de ".$mes_texto;
 echo $fecha_larga ;
    ?>
	<form action="toggle_1.php" method="post">   
            <input type="checkbox" checked data-toggle="toggle" data-on="Asistió" data-off="No asistió" data-onstyle="success" data-offstyle="danger" id="toggle" name="toggle">
	 <input type="submit" value="Siguiente" class="btn btn-success">
	</form>   
	<script src="toggle/js/bootstrap-toggle.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>