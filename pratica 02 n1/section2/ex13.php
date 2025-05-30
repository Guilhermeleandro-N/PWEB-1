<?php 
    $n1 = 5;
    $n2 = 4;
    $media = ($n1 + $n2)/2;
    if ($media>=7){
        echo "Aprovado";
    }elseif($media>=5){
        echo "Recuperação";
    }else{
        echo "Reprovado";
    }