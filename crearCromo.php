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

    ?>
    <form action="insertarCromo.php" method="get" name="formCromo">
        <div>
            Nombre: <br>
            <input type="text" name="nombre" id="nombre"> <br>
            Precio: <br>
            <input type="text" name="precio" id="precio"> <br>
            Álbum:<br>
            <input type="text" name="album" id="album"><br>
            Carátula: <br>
            <input type="file" name="caratula" id="caratula"><br>
            Unidades: <br>
            <input type="text" name="unidades" id="unidades"><br>

            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>