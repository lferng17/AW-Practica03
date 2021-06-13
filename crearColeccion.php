<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Crear Coleccion</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include("navbar.php");?>
    <form action="insertarColeccion.php" method="post" name="formColeccion" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="nombre" required> <br>
        Precio: <br>
        <input type="text" name="precio" required> <br>
        Carátula: <br>
        <input type="file" name="caratula" required> <br><br>

        <input type="submit" name="subir" value="Enviar">
    </form>
</body>

</html>