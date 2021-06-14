<?php
    $usuario = $_COOKIE["usuario"];
    $admin = $_COOKIE["admin"];
    setcookie("usuario", $usuario, time()+1);
    setcookie("admin", $admin, time()+1);
    header("Location: ../login.php");
?>