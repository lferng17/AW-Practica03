<?php
    try {
        include("conexion_BBDD.php");
        $base= new PDO("mysql:host=$db_host; dbname=$db_nombre", "$db_usuario", "$db_contraseña");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");
        } catch(Exception $e){
            die("Error" . $e->getMessage());
            echo "Línea del error" . $e->getLine();
        }
