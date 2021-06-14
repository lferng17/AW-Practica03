<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../login.php");
}
$id_cromo = $_GET["id"];
include("conexion_BBDD_PDO.php");
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_SESSION["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
$precio = $_GET["precio"];
$unidades =$_GET["unidades"];
foreach ($usuario as $user) {
    $id_usuario = $user->id_user;
    $saldo_usuario = $user->saldo;
    if ($precio < $saldo_usuario && $unidades > 0) {
        $base->query("INSERT INTO usuarios_cromos VALUES ($id_usuario, $id_cromo)");
        $saldo_usuario = $saldo_usuario - $precio;
        $unidades=$unidades-1;
        $base->query("UPDATE usuarios SET saldo=$saldo_usuario WHERE id_user=$id_usuario");
        $base->query("UPDATE cromos SET unidades=$unidades WHERE id=$id_cromo");
        header("Location: ../tienda.php");
    } else {
        echo "NO TIENES SUFICIENTE SALDO PARA COMPRAR ESTE CROMO O EL CROMO NO ESTÁ DISPONIBLE. <a href='../tienda.php'>VOLVER A LA TIENDA</a>";
    }
}
