<?php
    session_start();

    if (!isset($_SESSION["usuario"])) {
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
    $registros=$base->query("SELECT * FROM colecciones")->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tienda</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include("navbar.php");?>
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Carátula</td>
            <td>Comprar Colección</td>
            <td>Comprar Cromos</td>
        </tr>

        <?php
            foreach($registros as $coleccion):?>
        <tr>
        <td><?php echo $coleccion->id?></td>
        <td><?php echo $coleccion->nombre?></td>
        <td><?php echo $coleccion->precio?></td>
        <td><img src = "/AW-Practica03-main/ImagenesServidor/<?php echo $coleccion->caratula;?>" width="25%"/></td>
        <td><a href="comprarColeccion.php?id=<?php echo $coleccion->id?>&precio=<?php echo$coleccion->precio?>"><input type="button" name="comprarCol" value="Comprar Colección"></a></td>
        <td><a href="comprarCromo.php?id_coleccion=<?php echo $coleccion->id?>"><input type="button" name="comprarCrom" value="Comprar Cromos"></a></td>
        </tr>

        <?php endforeach; ?>
    </table>

</body>
</html>