<?php
    $usuario = $_COOKIE["usuario"];
    $admin = $_COOKIE["admin"];
    setcookie("usuario", "$usuario", time()-1,"/AW-Practica03-main/");
    setcookie("admin", $admin, time()-1,"/AW-Practica03-main/");
    header("Location: ../index.html");
