<?php
    // include "cabecera.inc.php";

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
    // print_r($fila);
    echo "<tr>";
    echo "<td>".$fila[1]."</td>";
    echo "<td>".$fila[2]."</td>";
    echo "<td><a href='eliminar.php?ci=";
    echo $fila[0];
    echo "'>Eliminar </a></td>";
    echo "<td><a href='modificar.php?operacion=1&ci=";
    echo $fila[0];
    echo "'>Modificar</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='modificar.php?operacion=0'>Adicionar</a>";
include "pie.inc.php";
?>
<!-- TODO Unir almacena y modifica en un solo archivo -->
<!-- TODO Buscar validaciones para campos -->

<!-- Un metodo es un procedimiento y/o funcion que altera el comportamiento de un objeto -->
<!-- Frameworks de programacion y Frameworks de trabajo (zachman)
De esto surge el MVC o 3 Capas que es una mejora del modelo monolitico
El modelo MVC puro se considera romantico(Por que es perfecto)
Un modelo basico que contenga Vista, logica, Datos es el modelo Cliente Servidor, no siempre
se puede llegar a esto y se le da a la logica mas control sobre la vista y sobre los datos, este 
modelo es llama Mixto. Existen Framework por capa, un ejemplo para los datos es: Hibbernate
 -->
