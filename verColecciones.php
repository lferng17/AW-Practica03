<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
}
include("conexion_BBDD_PDO.php");
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_SESSION["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
foreach ($usuario as $user) {
    $id_usuario = $user->id_user;
    $saldo_usuario = $user->saldo;
    $nombre_usuario = $user->usuario;
}
$registros = $base->query("SELECT * FROM colecciones INNER JOIN usuarios_colecciones ON colecciones.id = usuarios_colecciones.id_coleccion WHERE usuarios_colecciones.id_usuario=$id_usuario AND colecciones.estado=1")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ver Colecciones</title>
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
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Carátula</td>
            <td>Ver Cromos</td>
        </tr>

        <?php
        foreach ($registros as $coleccion) : ?>
        <tr>
            <td><?php echo $coleccion->id ?></td>
            <td><?php echo $coleccion->nombre ?></td>
            <td><img src = "/AW-Practica03-main/ImagenesServidor/<?php echo $coleccion->caratula;?>" width="25%"/></td>
            <td><a href="verCromos.php?id_coleccion=<?php echo $coleccion->id?>"><input type="button" value="Ver Cromos"></a></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>