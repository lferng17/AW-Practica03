<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location:login.php");
}
?>
<?php
    include("conexion_BBDD_PDO.php");
    $usuario=$base->query("SELECT * FROM usuarios WHERE usuario='".$_SESSION["usuario"]."'")->fetchAll(PDO::FETCH_OBJ);
    foreach($usuario as $user){
        $id_usuario=$user->id_user;
        $saldo_usuario=$user->saldo;
        $nombre_usuario=$user->usuario;
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
<?php
    if (isset($_SESSION["admin"])) {
        include("navbar.php");
    } else{
        include("navbarSoc.php");
    }
    ?>
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