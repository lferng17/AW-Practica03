<?php
include("conexion_BBDD_PDO.php");
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location:../login.php");
}
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_SESSION["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
$id_coleccion = $_GET["id"];
$precio = $_GET["precio"];
foreach ($usuario as $user) {
    $id_usuario = $user->id_user;
    $saldo_usuario = $user->saldo;
    $replicado = $base->query("SELECT * FROM usuarios_colecciones WHERE id_usuario=$id_usuario AND id_coleccion=$id_coleccion");
    $numero_registro = $replicado->rowCount();
    if($numero_registro==0){
        if ($precio < $saldo_usuario) {
            $base->query("INSERT INTO usuarios_colecciones VALUES ($id_usuario, $id_coleccion)");
            $saldo_usuario=$saldo_usuario-$precio;
            $base->query("UPDATE usuarios SET saldo=$saldo_usuario WHERE id_user=$id_usuario");
            header("Location: ../tienda.php");
        } else {
            echo "NO TIENES SUFICIENTE SALDO PARA COMPRAR ESTA COLECCIÓN. <a href='../tienda.php'>VOLVER A LA TIENDA</a>";
        }
    } else {
        echo "YA TIENES ESTA COLECCIÓN COMPRADA. <a href='../tienda.php'>VOLVER A LA TIENDA</a><br>";
    }
}
