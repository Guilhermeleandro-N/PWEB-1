<?php
echo "<h1>Exibe fatal erro e não executa todas as chamadas de funções</h1>";
require "funcao.php";
ola();
require "funcao.php";
ola();

?>