<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style/styleLogin.css">
</head>

<body>

    <div class="login-page">
        <div class="form">
            <form action="funciones/comprueba_login.php" method="post" class="login-form">

                <input type="text" name="usuario" placeholder="usuario" />
                <input type="password" name="pass" placeholder="contraseña" />
                <button type="submit">Entrar</button>
                
                <p class="message">¿No estás registrado? <a href="registrar.html">Crear cuenta</a></p>

            </form>
        </div>
    </div>

</body>

</html>