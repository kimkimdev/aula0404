<?php
echo "<pre>";
$lista [] = 10;
$lista [] = 11;
$lista [] = 12;
for ($i=0; $i < count($lista); $i++) { 
    echo "posição".$i."valor:".$lista[$i]."<br>";
}

foreach($list as $valor){
    echo "valor:".$valor."<br>";
}
echo "<br><br>";
var_dump($lista);

$lista1 = array();

var_dump($lista1);

$lista2 = [1,2,3,4,"cinco",6];
unset($lista2[0]);

$lista2[] = 20;
var_dump($lista2);