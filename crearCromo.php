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
    <title>Crear Cromo</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include("navbar.php");?>
    <form action="insertarCromo.php" method="post" name="formCromo" enctype="multipart/form-data">
        <div>
            Nombre: <br>
            <input type="text" name="nombre" id="nombre" required> <br>
            Precio: <br>
            <input type="text" name="precio" id="precio" required> <br>
            Álbum:<br>
            <input type="text" name="album" id="album" required><br>
            Carátula: <br>
            <input type="file" name="caratula" id="caratula" required><br>
            Unidades: <br>
            <input type="text" name="unidades" id="unidades" required><br><br>

            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>