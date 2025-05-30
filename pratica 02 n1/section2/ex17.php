<?php
$temperatura = 28;
if ($temperatura<0){
    echo "Alerta de Gelo!";
}elseif ($temperatura<=15){
    echo "Clima Ameno";
}elseif($temperatura<=25){
    echo "Clima Agradável";
}else{
    echo "Atenção: Calor extremo!";
}