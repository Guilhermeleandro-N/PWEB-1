<?php
function ehPrimo($numero) {
    if ($numero < 2) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isset($_POST['qtde']) && !empty($_POST['qtde'])) {
    $qtde = $_POST["qtde"];

    $numerosSorteados = [];
    for ($i = 0; $i < $qtde; $i++) {
        $numerosSorteados[] = rand(1, 60);
    }

    
    $totalPrimos = 0;
    foreach ($numerosSorteados as $num) {
        if (ehPrimo($num)) {
            $totalPrimos++;
        }
    }
    echo "<h2>Números Sorteados:</h2>";
    foreach($numerosSorteados as $num){
        echo "- $num <br>";
    }
    echo "Total de números primos: $totalPrimos<br>";

}else{
    echo "Prencha o formulário corretamente.";
}