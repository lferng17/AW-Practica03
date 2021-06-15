<?php
if (!isset($_COOKIE["usuario"])) {
    header("Location: ../login.php");
}
$id_cromo = $_GET["id"];
include("conexion_BBDD_PDO.php");
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_COOKIE["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
$precio = $_GET["precio"];
$unidades = $_GET["unidades"];
foreach ($usuario as $user) {
    $id_usuario = $user->id_user;
    $saldo_usuario = $user->saldo;
    $replicado = $base->query("SELECT * FROM usuarios_cromos WHERE id_usuario=$id_usuario AND id_cromo=$id_cromo");
    $id_coleccion = $base->query("SELECT id_coleccion FROM cromos WHERE id=$id_cromo");
    $numero_registro = $replicado->rowCount();
    if ($numero_registro == 0) {
        if ($precio < $saldo_usuario && $unidades > 0) {
            $base->query("INSERT INTO usuarios_cromos VALUES ($id_usuario, $id_cromo)");
            $saldo_usuario = $saldo_usuario - $precio;
            $unidades = $unidades - 1;
            $base->query("UPDATE usuarios SET saldo=$saldo_usuario WHERE id_user=$id_usuario");
            $base->query("UPDATE cromos SET unidades=$unidades WHERE id=$id_cromo");
            $result = $base->query("SELECT * FROM usuarios_cromos INNER JOIN cromos ON usuarios_cromos.id_cromo = cromos.id WHERE cromos.id_coleccion=$id_coleccion AND usuarios_cromos.id_usuario=$id_usuario");
            echo $base->errorInfo();
            $n_cromos_de_x_coleccion=$result->rowCount();
            $result = $base->query("SELECT * FROM cromos WHERE id_coleccion=$id_coleccion");
            $cromos_totales_x_coleccion=$result->rowCount();
            if ($n_cromos_de_x_coleccion = $cromos_totales_x_coleccion) {
                $base->query("UPDATE usuarios_colecciones SET estado=2 WHERE id_coleccion=$id_coleccion");
                echo '<script language="javascript">';
                echo 'alert("Colección terminada.")';
                echo '</script>';
                echo "<script>location.href='../tienda.php';</script>";
            } else {
                $base->query("UPDATE usuarios_colecciones SET estado=1 WHERE id_coleccion=$id_coleccion");
                echo '<script language="javascript">';
                echo 'alert("Compra realizada.")';
                echo '</script>';
                echo "<script>location.href='../tienda.php';</script>";
            }
        } else {
            echo '<script language="javascript">';
            echo 'alert("No tienes suficiente saldo para comprar este cromo o el cromo no está disponible.")';
            echo '</script>';
            echo "<script>location.href='../tienda.php';</script>";
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Ya tiene este cromo comprado.")';
        echo '</script>';
        echo "<script>location.href='../tienda.php';</script>";
    }
}
