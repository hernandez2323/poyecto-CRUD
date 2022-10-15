<?php
print_r($_POST);

if(empty($_POST["inputnombre"]) || empty($_POST["inputedad"]) || empty($_POST["inputexpediente"])){
    echo "Completar formulario";
    exit();
}

include_once "model/conexion.php";
$nombre = $_POST["inputnombre"];
$edad = $_POST["inputedad"];
$expediente = $_POST["inputexpediente"];

$consulta = $bd->prepare("INSERT INTO paciente(nombre,edad,expediente) VALUES(?,?,?);");
$respuesta = $consulta->execute([$nombre,$edad,$expediente]);

if($resultado === true){
    header("location: index.php");
} else{
    echo "fallo el registro";
}


?>