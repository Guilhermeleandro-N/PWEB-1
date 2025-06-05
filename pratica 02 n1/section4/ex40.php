<?php
function timestamp(){
    echo "Horario unix de execução da ação: ". time(). "<br>";
} 
echo "Ação A<br>", timestamp();
echo "Ação B<br>", timestamp();