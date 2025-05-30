<?php
$cargo = "Analista";
switch($cargo){
    case "Desenvolvedor":
        $salario = 2000;
        break;
    case "Designer":
        $salario = 2500;
        break;
    case "Gerente":
        $salario = 3000;
        break;
    default:
        echo "Cargo inválido!";
}
if(isset($salario)){
    echo "O salario do $cargo é $salario.";
}
