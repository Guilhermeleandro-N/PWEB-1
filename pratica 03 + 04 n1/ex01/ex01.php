<?php

if (isset($_POST['nome']) && !empty($_POST['nome']) and isset($_POST['nome']) && !empty($_POST['SKU'])){
    $nomes = $_POST["nome"];
    $skus = $_POST["SKU"];
    for ($i = 0; $i <count($nomes); $i++){
        echo "<br>Produto: " . ($nomes[$i]) . "<br> - SKU: " . ($skus[$i]) . "<br><br>";
    }
}