<?php
    include("conexion_BBDD_PDO.php");
    $nuevoUsuario = $_POST["usuario"];
    $nuevaPass = $_POST["pass"];
    $usuarios=$base->query("SELECT * FROM usuarios WHERE usuario='$nuevoUsuario'")->fetchAll(PDO::FETCH_OBJ);
    if($usuarios){
        echo '<script language="javascript">';
        echo 'alert("Lo siento, ya hay un socio con ese nombre de usuario. Vuelva a intentarlo.")';
        echo '</script>';
        echo "<script>location.href='../registrar.html';</script>"; 
    } else{
        $base->query("INSERT INTO usuarios(usuario,contraseña,admin,saldo) VALUES ('$nuevoUsuario', '$nuevaPass', 0, 0)");
        echo '<script language="javascript">';
        echo 'alert("Usuario creado con éxito. Ya puede iniciar sesión")';
        echo '</script>';
        echo "<script>location.href='../login.php';</script>"; 
    }
?>