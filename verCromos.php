<?php
if (!isset($_COOKIE["usuario"])) {
    header("Location:login.php");
}
$id_coleccion = $_GET["id_coleccion"];
include("funciones/conexion_BBDD_PDO.php");
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_COOKIE["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
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
    
<?php
    if (isset($_COOKIE["admin"])) {
        include("navbar.php");
    } else{
        include("navbarSoc.php");
    }
    ?>

    <table>
        <tr>
            <td><b>ID</b></td>
            <td><b>Nombre</b></td>
            <td><b>Carátula</b></td>
        </tr>

        <?php
        foreach ($registros as $coleccion) : ?>
        <tr>
            <td><?php echo $coleccion->id ?></td>
            <td><?php echo $coleccion->nombre ?></td>
            <td><img src = "/AW-Practica03-main/ImagenesServidor/<?php echo $coleccion->caratula;?>" width=140px/></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>