<?php
    if (!isset($_COOKIE["usuario"])) {
        header("Location:login.php");
    }
    include("funciones/conexion_BBDD_PDO.php");
    $usuario=$base->query("SELECT * FROM usuarios WHERE usuario='".$_COOKIE["usuario"]."'")->fetchAll(PDO::FETCH_OBJ);
    foreach($usuario as $user){
        $id_usuario=$user->id_user;
        $saldo_usuario=$user->saldo;
        $nombre_usuario=$user->usuario;
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tienda</title>
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
    <div class="cabecera">
        <h2>&nbsp ¿Quieres ganar puntos para seguir con tu colección?</h2>
        &nbsp &nbsp Tienes 2 opciones, puedes hacer nuestro pasatiempos para ganar 30 puntazos, o hacer nuestro cuestionario sobre la Eurocopa, en dónde conseguirás 2 puntos por cada pregunta acertada. Haga click sobre la imagen correspondiente para comenzar. ¡Mucha Suerte!<br><br><br><br>
    </div>
    <div class="fotoPasatiempo">
        <a href="pasatiempos.php"><img src="ImagenesServidor/PuntosExtra/pasatiempo.png" width=1200px height=600px></a>
    </div>
    <div class="fotoCuestionario">
        <a href="cuestionarioEuro.php"><img src="ImagenesServidor/PuntosExtra/cuestionario.png" width=1400px height=600px></a>
    </div>
</body>
</html>