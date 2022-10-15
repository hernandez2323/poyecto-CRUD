<?php

$contraseña="";
$usuario="root";
$nombre_bd="registroproyect";

try {
    //codigo que se estara ejecutando
     $bd = new PDO(
        "mysql:host=localhost;
        dbname=".$nombre_bd,
        $usuario,
        $contraseña,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
     );

} catch (Exception $e) {
    //manejo del error
    echo"no funciono la conexion:".$e->getMessage();
}

?>