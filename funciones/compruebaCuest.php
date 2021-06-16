<?php 

if (!isset($_COOKIE["usuario"])) {
    header("Location:../login.php");
}
include("conexion_BBDD_PDO.php");
$usuario = $base->query("SELECT * FROM usuarios WHERE usuario='" . $_COOKIE["usuario"] . "'")->fetchAll(PDO::FETCH_OBJ);
foreach ($usuario as $user) {
    $id_usuario = $user->id_user;
    $saldo_usuario = $user->saldo;
    $nombre_usuario = $user->usuario;
}
    $goleador = strtoupper($_GET["goleador"]);
    $primera = strtoupper($_GET["primera"]);
    $treseuros = $_GET["treseuros"];
    $golspa = strtoupper($_GET["golspa"]);
    $poraño = $_GET["poraño"];
    $gol2008 = strtoupper($_GET["gol2008"]);
    $europor = strtoupper($_GET["europor"]);
    $vecesspa = $_GET["vecesspa"];
    $añocelspa = strtoupper( $_GET["añocelspa"]);
    $final = strtoupper($_GET["final2020"]);

    $contador = 0;

    if ($goleador == "CRISTIANO RONALDO" || $goleador == "CRISTIANO" || $goleador == "RONALDO"){
        $contador++;
    }
    if ($primera == "ALEMANIA" || $primera == "SELECCIÓN ALEMANA" || $primera == "ALEMANIA FEDERAL"){
        $contador++;
    }
    if ($treseuros == "fra" || $treseuros == "fra" || $treseuros == "fra"){
        $contador++;
    }
    if ($golspa == "DAVID VILLA" || $golspa == "VILLA") {
        $contador++;
    }
    if ($poraño == 2016){
        $contador++;
    }
    if ($europor == "GRECIA" || $europor == "SELECCIÓN GRIEGA"){
        $contador++;
    }
    if ($vecesspa == 4){
        $contador++;
    }
    if ($añocelspa == 1964 || $añocelspa == 1964){
        $contador++;
    }
    if ($final == "WEMBLEY" || $final == "WEMBLEY STADIUM" || $final=="LONDRES"){
        $contador++;
    }
    if ($gol2008 == 'FERNANDO TORRES' || $gol2008=='TORRES'){
        $contador++;
    }

    $saldoextra = $contador*2;
    $saldo_usuario = $saldo_usuario + $saldoextra;
    $sql="UPDATE usuarios SET saldo = $saldo_usuario WHERE id_user = $id_usuario";
    $update = $base->query($sql);
    echo '<script language="javascript">';
    echo "alert('¡Felicidades!, has ganado $saldoextra puntos contestando al cuestionario. Te redigiremos a nuestra tienda para gastarlos')";
    echo '</script>';
    echo "<script>location.href='../tienda.php';</script>"; 
?>