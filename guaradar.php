<?php
include("conexion.php");

$sql = "INSERT INTO usuarios (nombre, apellido, edad)" VALUES ('ale','miranda','22')

$res = $conexion->query($sql);

if($res){
    Echo "insercion exitosa";

}else{
    Echo "fallo la isercion";
}
?>