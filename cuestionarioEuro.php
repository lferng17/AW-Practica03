<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location:login.php");
}
include("funciones/conexion_BBDD_PDO.php");
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_SESSION["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
foreach ($usuario as $user) {
    $id_usuario = $user->id_user;
    $saldo_usuario = $user->saldo;
    $nombre_usuario = $user->usuario;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cuestionario Eurocopa</title>
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
    
    <div class="form">
        <form action="funciones/compruebaCuest.php" method="get">
            <table>
                <tr>
                    <td><label>1. ¿Quíen es el máximo goleador de la historia de la Eurocopa?</label></td>
                    <td><input type="text" name="goleador"></td>
                </tr>
                <tr>
                    <td><label>2. ¿Qué selección es la primera en la clasificación histórica de la Eurocopa?</label></td>
                    <td><input type="text" name="primera"></td>
                </tr>
                <tr>
                    <td>3. ¿Cuál de estas selecciones NO tiene 3 Eurocopas?</td>
                    <td>
                        <input type="radio" id="spa" name="treseuros" value="spa" checked>
                        <label for="spa">España</label><br>
                        <input type="radio" id="ger" name="treseuros" value="ger">
                        <label for="ger">Alemania</label><br>
                        <input type="radio" id="fra" name="treseuros" value="fra">
                        <label for="fra">Francia</label>
                    </td>
                </tr>
                <tr>
                    <td><label>4. ¿Quíen es el máximo goleador de la historia de la Selección Española?</label></td>
                    <td><input type="text" name="golspa"></td>
                </tr>
                <tr>
                    <td><label>5. ¿En que año ganó la Selección Portuguesa su único título?</label></td>
                    <td><input type="number" name="poraño"></td>
                </tr>
                <tr>
                    <td><label>6. ¿Quién marcó el único gol de la final de la Eurocopa 2008?</label></td>
                    <td><input type="text" name="gol2008"></td>
                </tr>
                <tr>
                    <td><label>7. ¿Quién ganó la Eurocopa 2002 celebrada en Korea?</label></td>
                    <td><input type="text" name="eurokor"></td>
                </tr>
                <tr>
                    <td><label>8. ¿Cúantas veces ha llegado la Selección Española a la final de la Eurocopa?</label></td>
                    <td><input type="number" name="vecesspa"></td>
                </tr>
                <tr>
                    <td><label>9. ¿En que año se celebró la Eurocopa en España?</label></td>
                    <td><input type="number" name="añocelspa"></td>
                </tr>
                <tr>
                    <td><label>10. ¿En qué estadio se celebrará la final de la Eurocopa de 2020?</label></td>
                    <td><input type="text" name="final2020"></td>
                </tr>
                <tr>
                <td colspan=2> <input type="submit" value="ENVIAR PARA CORREGIR"></td>
                </tr>
            </table>
        </form>
    </div>