<?php
if (isset($_POST['cartas']) && !empty($_POST['cartas'])) {
    $cartas = $_POST['cartas'];

    echo "Ordem original das cartas:<br>";
    
    foreach ($cartas as $carta) {
        echo "- " . $carta . "<br>";
    }

    shuffle($cartas);

    echo "<h2>Ordem Embaralhada das Cartas:</h2>";
    
    foreach ($cartas as $carta) {
        echo "- " . $carta . "<br>";
    }
 
} else {
    echo "Preencha o formulário corretamente";
}

