<?php


include("conexion.php");

$sql = "SELECT * FROM usuarios WHERE id='7'";
$sql = "SELECT * FROM usuarios WHERE edad >30";
$sql = "SELECT * FROM usuarios WHERE edad <30";
$sql = "SELECT * FROM usuarios WHERE apellido LIKE '%a%'";
$sql = "SELECT * FROM usuarios ORDER by id ASC";
$res = $conexion->query($sql);


while($usuario = $res->fetch_assoc()){
    echo "Usuario No: " . $usuario['id'] . "<br>";
    echo "Usuario No: " . $usuario['nombre'] . "<br>";
    echo "Usuario No: " . $usuario['apellido'] . "<br>";
    echo "Usuario No: " . $usuario['edad'] . "<br><br>";
}



?>