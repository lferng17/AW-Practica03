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
    <form action="insertarColeccion.php" method="get" name="formColeccion">
        Nombre: <br>
        <input type="text" name="nombre"> <br>
        Precio: <br>
        <input type="text" name="precio"> <br>
        Carátula: <br>
        <input type="file" name="caratula"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>