<?php

$conexion = new mysqli("programacionweb";"root","","php");
if($conexion){
    echo "la conexion funciono correctamente";

}else{
    echo"fallo la conexion";

}


?>