<?php
// include "cabecera.inc.php";
include "conexion.inc.php";
$operacion=$_GET["operacion"];
$nombre="";
$paterno="";
if($operacion=='1'){
    $ci=$_GET["ci"];
    $result =mysqli_query($conn,"select * from alumno where ci='".$ci."'"); // Consulta a la BD
    $fila=mysqli_fetch_row($result); 
    $ci=$fila[0];
    $nombre=$fila[1];
    $paterno=$fila[2];
}
?>
<form action="almacena.php" method="GET">
    <input type="hidden" name="operacion" value="<?php echo $operacion;?>">
    <?php
    if ($operacion=='1'){
        echo '<input type="hidden" name="ci" value="'.$ci.'"/>';
    }
    else{
        echo "<labe>CI</label>";
        echo '<input type="text" name="ci" value=""/><br>';

    }
    ?>
    <label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo $nombre;?>">
    <br>
    <label>Paterno</label>
    <input type="text" name="paterno" value="<?php echo $paterno;?>">
    <br>
    <input type="submit" name="aceptar" value="Aceptar">
    <input type="submit" name="cancelar" value="Cancelar">
</form>
<?php
// include "pie.inc.php";
?>