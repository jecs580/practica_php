<!-- TODO: Buscar metodos para ofuscar codigo
(Tratar que nuestro codigo sea dificil de leer para personas ajenas al prouyecto). -->
<!-- TODO: Buscar patrones de diseño -->
<!-- TODO: ¿Bases de datos SGBD? -->
<!-- TODO: LDD -->
<!-- TODO: ¿MDF? -->
<!-- NOTA: Un backup debe tener el tiple del tamaño de la base de dato -->
<!-- NOTA: Truncate reinicia el incremental a diferencia del delete mantiene el numero -->
<?php
    include "cabecera.inc.php";
?> 
    <form action="verifica.php" method="GET">
    <label >Usuario</label>
    <input style="color: blue; width: 400px; background-color: #000;" type="text" name="username">
    <br>
    <label>Clave</label>
    <input type="password" name="password">
    <br>
    <input style="margin-top: 5px;" type="submit" name="aceptar" value="Aceptar">
    <input type="submit" name="cancelar" value="Cancelar">
    </form>
<?php
    include "pie.inc.php";
?>