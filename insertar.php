<?php
include("conexion.php");


$sql = "INSERT INTO usuarios(nombre,apellido,edad) VALUES ('Erick','Gomez','22'";

$res = $conexion->query($sql);
if($res){
    echo "Dato agregado exitosamente";

}else{
    echo "fallo la inserción";
}
?>