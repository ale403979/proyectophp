<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo 'hola';
echo '<h1>Este es un titulo</h1>';

?>

h1

//Estructuras de control
//El if
$num = 3;
if( $num <= 3) {
echo "soy igual al 3";

}

//El switch
$num2 = 4;
switch($num2) {
case 1: echo "soy el uno";
break;

case 4: echo "soy el cuatro";
break;
default: echo "fallaste";
break;

}

//El while
$i = 1;
while($i <= 10){
echo $i;
$i++;

}

//Do while

$q = 1;
do{
echo $q;
$q++;
}while($q <= 10);
echo "<br";

//For
for($w = 1; $w <=10; $w++){
echo $w;
}


?>


    
</body>
</html>