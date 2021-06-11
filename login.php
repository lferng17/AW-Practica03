<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <?php
/*
    if (isset($_POST["enviar"])) {

        require("conexion_BBDD.php");
        try {
            $base = new PDO("mysql:host=" . $db_host . "; dbname=" . $db_nombre . "", $db_usuario, $db_contraseña);

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM usuarios WHERE usuario= :usuario AND contraseña= :pass";
            $resultado = $base->prepare($sql);
            $usuario = htmlentities(addslashes($_POST["usuario"]));
            $pass = htmlentities(addslashes($_POST["pass"]));
            $resultado->bindValue(":usuario", $usuario);
            $resultado->bindValue(":pass", $pass);
            $resultado->execute();

            $numero_registro = $resultado->rowCount();

            if ($numero_registro != 0) {

                session_start();

                $_SESSION["usuario"] = $_POST["usuario"];

                header("Location:");
            } else {

                echo "Usuario y/o contraseña incorrecto/a.";
                

            }
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }*/
    ?>
    <form action="comprueba_login.php" method="post">
        <table>
            <tr>
                <td>Login:</td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>

</html>