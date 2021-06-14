<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: ../login.php");
}
include("conexion_BBDD_PDO.php");
    $usuario=$base->query("SELECT * FROM usuarios WHERE usuario='".$_SESSION["usuario"]."'")->fetchAll(PDO::FETCH_OBJ);
    foreach($usuario as $user){
        $id_usuario=$user->id_user;
        $saldo_usuario=$user->saldo;
        $nombre_usuario=$user->usuario;
    }


    $palabra1 = $_GET["value0"].$_GET["value1"].$_GET["value2"].$_GET["value3"];
    $palabra2 = $_GET["value4"].$_GET["value5"].$_GET["value6"].$_GET["value7"];
    $palabra3 = $_GET["value8"].$_GET["value9"].$_GET["value10"].$_GET["value11"];
    $palabra4 = $_GET["value12"].$_GET["value13"].$_GET["value14"].$_GET["value15"];
    $palabra5 = $_GET["value16"].$_GET["value17"].$_GET["value18"].$_GET["value19"];
    $palabra6 = $_GET["value20"].$_GET["value21"].$_GET["value22"].$_GET["value23"];

    $palabra7 = $_GET["value24"].$_GET["value25"].$_GET["value26"].$_GET["value27"].$_GET["value28"].$_GET["value29"];
    $palabra8 = $_GET["value30"].$_GET["value31"].$_GET["value32"].$_GET["value33"].$_GET["value34"].$_GET["value35"];
    $palabra9 = $_GET["value36"].$_GET["value37"].$_GET["value38"].$_GET["value39"].$_GET["value40"].$_GET["value41"];
    $palabra10 = $_GET["value42"].$_GET["value43"].$_GET["value44"].$_GET["value45"].$_GET["value46"].$_GET["value47"];
    $palabra11 = $_GET["value48"].$_GET["value49"].$_GET["value50"].$_GET["value51"].$_GET["value52"].$_GET["value53"];
    $palabra12 = $_GET["value54"].$_GET["value55"].$_GET["value56"].$_GET["value57"].$_GET["value58"].$_GET["value59"];

    if($palabra1=="pata"&&$palabra2=="paca"&&$palabra3=="capa"&&$palabra4=="napa"&&$palabra5=="pana"&&$palabra6=="pena"&&$palabra7=="remota"&&$palabra8=="remoto"&&$palabra9=="motero"&&$palabra10=="motera"&&$palabra11=="matero"&&$palabra12=="retamo"){
        $nuevoSaldo=$saldo_usuario+30;
        $base->query("UPDATE usuarios SET saldo=$nuevoSaldo WHERE id_user=$id_usuario");
        echo "<div class='success'>FELICIDADES, HAS COMPLETADO EL PASATIEMPOS Y GANADO 50 PUNTOS. PODRÁS GASTAR ESOS PUNTOS EN <a href='../tienda.php'>NUESTRA TIENDA</a></div>";
    } else{
        echo "<div class='error'>NO, HAS FALLADO! AUNQUE PUEDES <a href='../pasatiempos.php'>VOLVER A INTENTARLO</a></div>";
    }
    ?>
