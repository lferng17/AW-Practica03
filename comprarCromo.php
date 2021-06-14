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
$registros = $base->query("SELECT * FROM cromos WHERE id_coleccion = $id_coleccion")->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Comprar Cromos</title>
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
            <td>ID</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Carátula</td>
            <td>Unidades</td>
            <td>Comprar</td>
        </tr>

        <?php
        foreach ($registros as $cromo) : ?>
            <tr>
                <td><?php echo $cromo->id ?></td>
                <td><?php echo $cromo->nombre ?></td>
                <td><?php echo $cromo->precio ?></td>
                <td><img src="/AW-Practica03-main/ImagenesServidor/<?php echo $cromo->caratula; ?>" width=140px /></td>
                <td><?php echo $cromo->unidades ?></td>
                <td><a href="funciones/comprarCromoImpl.php?id=<?php echo $cromo->id ?>&precio=<?php echo $cromo->precio ?>&unidades=<?php echo $cromo->unidades ?>"><input type="button" name="comprarCol" value="Comprar"></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>