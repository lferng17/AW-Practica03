<?php
    session_start();

    if (!isset($_SESSION["usuario"])) {
        header("Location:login.php");
    }
    include("conexion_BBDD_PDO.php");
    $usuario=$base->query("SELECT * FROM usuarios WHERE usuario='".$_SESSION["usuario"]."'")->fetchAll(PDO::FETCH_OBJ);
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
    if (isset($_SESSION["admin"])) {
        include("navbar.php");
    } else{
        include("navbarSoc.php");
    }
    ?>
    <div class="cabecera">
        <h2>¿Quieres ganar puntos para seguir con tu colección?</h2>
        Pues tienes 2 opciones, puedes hacer nuestro pasatiempos para ganar 30 puntazos, o hacer nuestro cuestionario sobre la Eurocopa, en dónde conseguirás 2 puntos por cada pregunta acertada.
    </div>
    <div class="foto1">
        <a href="pasatiempos.php"><img src="ImagenesServidor/foto.jpg"></a>
        PULSA EN LA FOTO PARA ACCEDER AL PASATIEMPOS!
    </div>
    <div class="foto2">
        <a href="cuestionarioEuro.php"><img src="ImagenesServidor/foto.jpg"></a>
        PULSA EN LA FOTO PARA ACCEDER AL CUESTIONARIO!
    </div>
</body>
</html>