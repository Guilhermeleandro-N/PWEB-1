<?php
function calcularMedia($a, $b, $c){
    return ($a + $b + $c)/3;
}

$media = (calcularMedia(6, 8, 7));
echo "A media do aluno foi ". $media;