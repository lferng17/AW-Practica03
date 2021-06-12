<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Crear Coleccion</title>
</head>

<body>
<?php
    session_start();

    if (!isset($_SESSION["admin"])) {
        header("Location:login.php");
    }
?>
</body>

