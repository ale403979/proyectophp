<?php

include("conexion.php");
$sql = "SELECT * FROM usuarios";
$res = $conexion->query($sql);
while($usuario = $res->fetch_assoc()){
    echo "Usuario No: " . $usuario['id'] . "<br>";
    echo "Usuario No: " . $usuario['nombre'] . "<br>";
    echo "Usuario No: " . $usuario['apellido'] . "<br>";
    echo "Usuario No: " . $usuario['edad'] . "<br><br>";
}



?>