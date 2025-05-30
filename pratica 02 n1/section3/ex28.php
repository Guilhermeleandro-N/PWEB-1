<?php
$array = [];

for($i = 0; $i < 100; $i++){
    $array[] = rand(50,5000); 
    $dia = $i +1;
    echo "Valor do dia $dia: $array[$i]<br>";
}
$valorTotal=0;
foreach($array as $valor){
    $valorTotal += $valor;
}
echo "Valor total: $valorTotal";