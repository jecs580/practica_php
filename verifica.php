<?php
    $username=$_GET["username"];
    $password=$_GET["password"];
    if ($username =="jorge" && $password =="12345678") {
        $_SESSION["id_user"]=100;
        header("Location: saludo.php"); // Redirecionamiento directo
        // echo "<a href = 'saludo.php'> Saludo</a>";
    }
    else {
        header("Location: index.htm"); // Redirecionamiento directo
        // echo "<a href = 'index.htm'>No valido</a>";
    }
    // Para habilitar las sesiones Linux necesista autorizar, en windows abrimos el archivo php.ini colocamos session.auto_start=0 (debes colocar la session_start();), para habilitar las sessiones, posterirmente lo reinicias apache en XAMP. Si colocas session.auto_start=1 no es necesario iniciar la sesion.
    ?>