<?php
$stdcivil = "O";
switch($stdcivil){
    case "C":
        echo "Você é casado!";
        break;
    case "S":
        echo "Você é solteiro.";
        break;
    case "D":
        echo "Você é divorciado.";
        break;
    case "S":
        echo "Você é solteiro.";
        break;
    case "O":
        echo "Você possui outro estado civíl.";
        break;
    default:
        echo "Entrada inválida.";
}
