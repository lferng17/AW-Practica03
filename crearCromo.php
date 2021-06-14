<?php
    session_start();

    if (!isset($_SESSION["admin"])) {
        header("Location:login.php");
    }

?>
<?php
    include("funciones/conexion_BBDD_PDO.php");
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
    <title>Crear Cromo</title>
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
    <form action="funciones/insertarCromo.php" method="post" name="formCromo" enctype="multipart/form-data">
        <div>
            Nombre: <br>
            <input type="text" name="nombre" id="nombre" required> <br>
            Precio: <br>
            <input type="text" name="precio" id="precio" required> <br>
            <label for="coleccion">Colección:</label><br>
            <select name="coleccion" id="coleccion">
                <?php foreach($registros as $coleccion):?>
                    <option value="<?php echo $coleccion->id?>"><?php echo $coleccion->nombre?></option>
                <?php endforeach?>
            </select>
            <br>
            <label>Carátula: <br>
            <input type="file" name="caratula" id="caratula" required><br><br>
            Unidades: <br>
            <input type="text" name="unidades" id="unidades" required><br><br>

            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>