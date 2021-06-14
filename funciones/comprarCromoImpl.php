<?php
if (!isset($_COOKIE["usuario"])) {
    header("Location: ../login.php");
}
$id_cromo = $_GET["id"];
include("conexion_BBDD_PDO.php");
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_COOKIE["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
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
        echo '<script language="javascript">';
        echo 'alert("No tienes suficiente saldo para comprar este cromo o el cromo no está disponible.")';
        echo '</script>';
        echo "<script>location.href='../tienda.php';</script>"; 
    }
}
