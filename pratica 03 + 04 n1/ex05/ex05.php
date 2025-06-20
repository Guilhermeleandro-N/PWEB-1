<?php
if (isset($_POST['aves']) && !empty($_POST['aves'])){
    $avesObservadas = $_POST['aves'];

    $avesUnicas = array_unique($avesObservadas);

    echo "<h3>Espécies únicas observadas:</h3>";
    
    foreach ($avesUnicas as $especie) {
        echo "- " . ($especie) . "<br>";
    }
    
    $pardal = false;
    foreach ($avesUnicas as $especie) {
        if (strtolower(trim($especie)) === "pardal") {
            $pardal = true;
            break;
        }
    }
    
    if ($pardal) {
        echo "A espécie Pardal já foi registrada.";
    } else {
        echo "A espécie Pardal ainda não foi registrada.";
    }
    
}else{
    echo "preenchar o formulário corretamente.";
}