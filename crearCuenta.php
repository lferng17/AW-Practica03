<?php
    session_start();
    include("conexion_BBDD_PDO.php");
    $nuevoUsuario = $_POST["usuario"];
    $nuevaPass = $_POST["pass"];
    $usuarios=$base->query("SELECT * FROM usuarios WHERE usuario='$nuevoUsuario'")->fetchAll(PDO::FETCH_OBJ);
    if($usuarios){
        echo "<div class='error'>LO SIENTO, YA HAY UN SOCIO CON ESE NOMBRE DE USUARIO. <a href='registrar.html'>VUELVA A INTENTARLO</a></div>";
    } else{
        $base->query("INSERT INTO usuarios(usuario,contraseña,admin,saldo) VALUES ('$nuevoUsuario', '$nuevaPass', 0, 0)");
        echo"<div class='success'>USUARIO CREADO CON ÉXITO, YA PUEDE <a href='login.php'>INICIAR SESIÓN</a></div>";
    }
?>