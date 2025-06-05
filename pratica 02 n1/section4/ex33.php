<?php
function precoTotal($vlrItemA, $qtdA, $vlrItemB, $qtdB, $vlrItemC, $qtdC){
    return ($vlrItemA * $qtdA) + ($vlrItemB * $qtdB) + ($vlrItemC * $qtdC);
}

$total = precoTotal(2, 3, 2.5, 3, 1, 6);
echo "O valor da soma de todos os produtos em estoque é ". $total ;