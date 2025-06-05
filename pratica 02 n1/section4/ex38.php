<?php
function formatado($valor): string{
    return "R$ ". number_format($valor, 2, ',', '.');
}
echo formatado(1114.45);