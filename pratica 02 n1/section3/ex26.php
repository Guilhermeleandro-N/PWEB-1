<?php
$entradas = [1,2,4,5,6,1,2,0];
$tamanho = count($entradas);
$i = 0;
do {
    echo "Insira um valor:<br>";
if ($entradas[$i] !== 0){
    echo "O valor da entrada foi: $entradas[$i]<br>";
    $i++;
}else{
    echo "O valor da entrada foi: $entradas[$i]<br>";
    break;
}
}while($i<$tamanho);
