<?php
$entradas = [1,3,1,4];
$prod = 0;
$i=0;
do{
    $prod+=$entradas[$i];
    echo "Valor produzido: $prod.<br>";
    $i++;
}while($prod < 5);

