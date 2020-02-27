<?php
$conn= mysqli_connect("localhost","jcallisaya","123456");
mysqli_select_db($conn,"academico");
$ci=$_GET["ci"];
$result =mysqli_query($conn,"delete from alumno where ci='".$ci."'"); // Consulta a la BD

?>