<?php
    include "cabecera.inc.php";

$conn= mysqli_connect("localhost","jcallisaya","123456");
mysqli_select_db($conn,"academico");

$result =mysqli_query($conn,"select * from alumno"); // Consulta a la BD
// $extraccion=mysqli_fetch_array($result);
// print_r($extraccion);
// echo "----<br>";
// while($fila = mysqli_fetch_row($result))
// {
//     print_r($fila);
//     echo $fila[0];
//     echo "<br>";
// }
echo "<table>";
echo "<tr><td>Nombre</td><td>Paterno</td><td>Operaciones</td></tr>";
while($fila = mysqli_fetch_row($result))
{   
    print_r($fila);
    echo "<tr>";
    echo "<td>".$fila[1]."</td>";
    echo "<td>".$fila[2]."</td>";
    echo "<td><a href='eliminar.php?ci=";
    echo $fila[0];
    echo "'>Eliminar </a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='adicionar.php'>Adicionar</a>";

include "pie.inc.php";
?>

<!-- TODO Hacer las acciones de  modificar y el Adicionar -->