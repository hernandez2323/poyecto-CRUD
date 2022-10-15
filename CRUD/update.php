<?php

include_once "model/conexion.php";

$identificador = $_POST["id"];
$nombre = $_POST["inputnombre"];
$edad = $_POST["inputedad"];
$expediente = $_POST["inputexpediente"];

$consulta = $bd->prepare("UPDATE paciente SET nombre = ?, edad = ?, expediente = ? where id = ?");
$respuesta = $consulta->execute([$nombre,$edad,$expediente,$identificador]);

if($respuesta){
    header("location: index.php");
}else{
    echo "ERROR";
}

?>