<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
}
$id_coleccion = $_GET["id_coleccion"];
include("conexion_BBDD_PDO.php");
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_SESSION["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
foreach ($usuario as $user) {
    $id_usuario = $user->id_user;
    $saldo_usuario = $user->saldo;
    $nombre_usuario = $user->usuario;
}
$registros = $base->query("SELECT * FROM cromos INNER JOIN usuarios_cromos ON cromos.id = usuarios_cromos.id_cromo WHERE usuarios_cromos.id_usuario=$id_usuario AND cromos.id_coleccion=$id_coleccion")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ver Cromos</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    
<?php include("navbar.php");?>

    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Carátula</td>
        </tr>

        <?php
        foreach ($registros as $coleccion) : ?>
        <tr>
            <td><?php echo $coleccion->id ?></td>
            <td><?php echo $coleccion->nombre ?></td>
            <td><img src = "/AW-Practica03-main/ImagenesServidor/<?php echo $coleccion->caratula;?>" width="25%"/></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>