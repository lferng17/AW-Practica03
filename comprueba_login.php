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

        session_start();



        $_SESSION["usuario"] = $_POST["usuario"];

        header("Location:crearColeccion.php");
    } else {

        header("Location: login.php");
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>