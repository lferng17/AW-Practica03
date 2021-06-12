<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Crear Coleccion</title>
</head>

<body>
<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("Location:login.php");
    }
    $id_coleccion = $_GET["id_coleccion"];
?>
</body>

