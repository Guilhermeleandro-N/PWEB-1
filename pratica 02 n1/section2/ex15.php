<?php
$bebidas = array("Café", "Chá", "Suco");
$escolha = "Coca Cola";
if (in_array($escolha, $bebidas)){
    echo "Você escolheu $escolha";
}else{
    echo "Bebida não dispinível";
}