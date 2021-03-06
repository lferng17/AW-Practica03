<?php

require("conexion_BBDD.php");
try {
    $base = new PDO("mysql:host=" . $db_host . "; dbname=" . $db_nombre . "", $db_usuario, $db_contraseña);

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios WHERE usuario= :usuario AND contraseña= :pass";
    $resultado = $base->prepare($sql);
    $usuario = htmlentities(addslashes($_POST["usuario"]));
    $pass = htmlentities(addslashes($_POST["pass"]));
    $resultado->bindValue(":usuario", $usuario);
    $resultado->bindValue(":pass", $pass);
    $resultado->execute();

    $numero_registro = $resultado->rowCount();

    if ($numero_registro != 0) {

        setcookie("usuario", "$usuario", time()+(30*60),"/AW-Practica03-main/");

        $admin = $resultado->fetchColumn(3);

        if ($admin==1){
            setcookie("admin", $admin, time()+(30*60),"/AW-Practica03-main/");
        }

        header("Location: ../tienda.php");

    } else {
        echo '<script language="javascript">';
        echo 'alert("El email o password es incorrecto.")';
        echo '</script>';
        echo "<script>location.href='../login.php';</script>"; 
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>