<?php
    $username=$_GET["username"];
    $password=$_GET["password"];
    if ($username =="jorge" && $password =="12345678") {
        $_SESSION["id_user"]=100;
        echo "<a href = 'saludo.php'> Saludo</a>";
    }
    else {
        echo "<a href = 'index.htm'>No valido</a>";
    }
    // Para habilitar las sesiones Linux necesista autorizar, en windows abrimos el archivo php.ini colocamos session.auto_start=0, para habilitar las sessiones, posterirmente lo reinicias apache en XAMP
    ?>