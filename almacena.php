<?php
// include "cabecera.inc.php";
include "conexion.inc.php";
$operacion=$_GET["operacion"];
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
if($operacion=='1'){
    $sql="update alumno set nombre='$nombre', paterno='$paterno' where ci='$ci'";
}
else
        $sql="insert into alumno(ci,nombre,paterno) values('$ci', '$nombre', '$paterno') ";
$result =mysqli_query($conn,$sql); // Consulta a la BD
header("Location: conexion.php");   
?>