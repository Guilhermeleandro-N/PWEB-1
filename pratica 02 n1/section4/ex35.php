<?php
function ParOuImpar(float $a): bool{
    if ($a % 2 == 0){
        return true;
    }else{
        return false;
    }
}

$numero = 8;
if (ParOuImpar($numero)){
    echo "Numero Par";
}else{
    echo "Numero ímpar";
}