<?php
    include "cabecera.inc.php";
?>
<?php
session_start();
 echo $_SESSION["id_user"];
?>
<?php
include "pie.inc.php";
?>