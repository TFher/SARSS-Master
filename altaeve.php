
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$date=getdate();
$fechaActual="$date[year]-$date[mon]-$date[mday] $date[hours]:$date[minutes]:0";//$_POST["fechaActual"];
$soloFecha="$date[year]-$date[mon]-$date[mday]";//$_POST["soloFecha"];

$conexion=mysqli_connect("localhost","root","","gato89") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into eventos(id_evento,nombre_evento,tipo,estatus,fecha,horaini,lugar) values 
                       ('$_REQUEST[nombre_evento]','$_REQUEST[tipo]',$_REQUEST[fecha],$_REQUEST[horaini],$_REQUEST[lugar])")
  or die("Problemas en el select ".mysqli_error($conexion));

mysqli_close($conexion);

echo "El evento fue dado de alta.";
?>
</body>
</html>