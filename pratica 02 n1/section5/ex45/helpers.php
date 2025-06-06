<?php
function formatado($valor): string{
    return "R$ ". number_format($valor, 2, ',', '.');
}

function saudacao($nome){
    echo "Olá, seja bem vindo, $nome!";
}

function soma(float $a, float $b): float {
    return $a + $b;
}