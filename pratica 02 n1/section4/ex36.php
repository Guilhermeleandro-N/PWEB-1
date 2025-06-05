<?php
function elegibilidade(int $idade): bool{
    if ($idade>=18){
        return true;
    } else {
        return false;
    }
}
$idade = 18;
if (elegibilidade($idade)){
    echo "Acesso Liberado";
} else {
    echo "Acesso negado";
}
