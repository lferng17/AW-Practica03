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
    <title>Pasatiempo en Cascada</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style_pasatiempos.css">
</head>

<body>
<?php
    if (isset($_SESSION["admin"])) {
        include("navbar.php");
    } else{
        include("navbarSoc.php");
    }
    ?>
    <hr>
    <h2>EN CASCADA</h2>
    <h3>MAYALA</h3>
    <form action="comprobarPasatiempo.php" method="get">
    <table>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value1" name="value0" onchange="actualizar0();"></td>
            <td><input type="text" maxlength="1" id="value2" name="value1" onchange="actualizar0();"></td>
            <td><input type="text" maxlength="1" id="value3" name="value2" onchange="actualizar0();"></td>
            <td><input type="text" maxlength="1" id="value4" name="value3" onchange="actualizar0();"></td>
            <td class="vacio"><strong>1</strong></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value5" name="value4" onchange="actualizar1()"></td>
            <td><input type="text" maxlength="1" id="value6" name="value5" onchange="actualizar1()"></td>
            <td><input type="text" maxlength="1" id="value7" name="value6" onchange="actualizar1()"></td>
            <td><input type="text" maxlength="1" id="value8" name="value7" onchange="actualizar1()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value9" name="value8" onchange="actualizar2()"></td>
            <td><input type="text" maxlength="1" id="value10" name="value9" onchange="actualizar2()"></td>
            <td><input type="text" maxlength="1" id="value11" name="value10" onchange="actualizar2()"></td>
            <td><input type="text" maxlength="1" id="value12" name="value11" onchange="actualizar2()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value13" name="value12" onchange="actualizar3()"></td>
            <td><input type="text" maxlength="1" id="value14" name="value13" onchange="actualizar3()"></td>
            <td><input type="text" maxlength="1" id="value15" name="value14" onchange="actualizar3()"></td>
            <td><input type="text" maxlength="1" id="value16" name="value15" onchange="actualizar3()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value17" name="value16" onchange="actualizar4()"></td>
            <td><input type="text" maxlength="1" id="value18" name="value17" onchange="actualizar4()"></td>
            <td><input type="text" maxlength="1" id="value19" name="value18" onchange="actualizar4()"></td>
            <td><input type="text" maxlength="1" id="value20" name="value19" onchange="actualizar4()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value21" name="value20" onchange="actualizar5()"></td>
            <td><input type="text" maxlength="1" id="value22" name="value21" onchange="actualizar5()"></td>
            <td><input type="text" maxlength="1" id="value23" name="value22" onchange="actualizar5()"></td>
            <td><input type="text" maxlength="1" id="value24" name="value23" onchange="actualizar5()"></td>
            <td class="vacio"><strong>2</strong></td>
        </tr>
        <tr>
            <td class="vacio"><strong>3</strong></td>
            <td><input type="text" maxlength="1" id="value25" name="value24" onchange="actualizar6()"></td>
            <td><input type="text" maxlength="1" id="value26" name="value25" onchange="actualizar6()"></td>
            <td><input type="text" maxlength="1" id="value27" name="value26" onchange="actualizar6()"></td>
            <td><input type="text" maxlength="1" id="value28" name="value27" onchange="actualizar6()"></td>
            <td><input type="text" maxlength="1" id="value29" name="value28" onchange="actualizar6()"></td>
            <td><input type="text" maxlength="1" id="value30" name="value29" onchange="actualizar6()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value31" name="value30" onchange="actualizar7()"></td>
            <td><input type="text" maxlength="1" id="value32" name="value31" onchange="actualizar7()"></td>
            <td><input type="text" maxlength="1" id="value33" name="value32" onchange="actualizar7()"></td>
            <td><input type="text" maxlength="1" id="value34" name="value33" onchange="actualizar7()"></td>
            <td><input type="text" maxlength="1" id="value35" name="value34" onchange="actualizar7()"></td>
            <td><input type="text" maxlength="1" id="value36" name="value35" onchange="actualizar7()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value37" name="value36" onchange="actualizar8()"></td>
            <td><input type="text" maxlength="1" id="value38" name="value37" onchange="actualizar8()"></td>
            <td><input type="text" maxlength="1" id="value39" name="value38" onchange="actualizar8()"></td>
            <td><input type="text" maxlength="1" id="value40" name="value39" onchange="actualizar8()"></td>
            <td><input type="text" maxlength="1" id="value41" name="value40" onchange="actualizar8()"></td>
            <td><input type="text" maxlength="1" id="value42" name="value41" onchange="actualizar8()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value43" name="value42" onchange="actualizar9()"></td>
            <td><input type="text" maxlength="1" id="value44" name="value43" onchange="actualizar9()"></td>
            <td><input type="text" maxlength="1" id="value45" name="value44" onchange="actualizar9()"></td>
            <td><input type="text" maxlength="1" id="value46" name="value45" onchange="actualizar9()"></td>
            <td><input type="text" maxlength="1" id="value47" name="value46" onchange="actualizar9()"></td>
            <td><input type="text" maxlength="1" id="value48" name="value47" onchange="actualizar9()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"></td>
            <td><input type="text" maxlength="1" id="value49" name="value48" onchange="actualizar10()"></td>
            <td><input type="text" maxlength="1" id="value50" name="value49" onchange="actualizar10()"></td>
            <td><input type="text" maxlength="1" id="value51" name="value50" onchange="actualizar10()"></td>
            <td><input type="text" maxlength="1" id="value52" name="value51" onchange="actualizar10()"></td>
            <td><input type="text" maxlength="1" id="value53" name="value52" onchange="actualizar10()"></td>
            <td><input type="text" maxlength="1" id="value54" name="value53" onchange="actualizar10()"></td>
            <td class="vacio"></td>
        </tr>
        <tr>
            <td class="vacio"><strong>4</strong></td>
            <td><input type="text" maxlength="1" id="value55" name="value54" onchange="actualizar11()"></td>
            <td><input type="text" maxlength="1" id="value56" name="value55" onchange="actualizar11()"></td>
            <td><input type="text" maxlength="1" id="value57" name="value56" onchange="actualizar11()"></td>
            <td><input type="text" maxlength="1" id="value58" name="value57" onchange="actualizar11()"></td>
            <td><input type="text" maxlength="1" id="value59" name="value58" onchange="actualizar11()"></td>
            <td><input type="text" maxlength="1" id="value60" name="value59" onchange="actualizar11()"></td>
            <td class="vacio"></td>
        </tr>
    </table>

    <div id="pie">
        <strong class="npie">1.</strong> Pie y pierna de los animales. <strong class="npie">2.</strong> Tristeza y dolor por algo.
        <strong class="npie">3.</strong> Muy lejano. <strong class="npie">4.</strong> Mata de la familia de las papilionáceas, de dos a cuatro metros de altura, con muchas verdascas o ramas
        delgadas, largas, flexibles, de color verde ceniciento y algo angulosas, hojas muy escasas, pequeñas, lanceoladas, flores amarillas en racimos laterales y fruto de vaina globosa con
        una sola semilla negruzca, que es común en España y apreciada para combustible de los hornos de pan.
    </div>
    <div> <h3>Cuadro de pistas</h3><hr>
        <span id="npistas"></span> 
    </div>
    <div class="pista" id="pista"></div>
    <div>
        Identifique la primera palabra y la última de cada bloque con las pista que se dan.
        A continuación, trate de descubrir las palabras intermedias. Para lograrlo,
        cambie una letra de la primera palabra para obtener la próxima y, después,
        altere el orden de una o varias letras para encontrar la siguiente. Sigue así,
        sucesivamente, hasta que logre completarambos casilleros. Todas las palabras
        intermedias deben tener significado.
    </div>
    <button id="enviar" type="submit" >Enviar Para Corregir</button> 
    </form>
    <button id="pistabt" onclick="mostrarPista();">Pista</button>


    <script type="text/javascript" src="scripts/script_pasatiempos.js"></script>
</body>

</html>