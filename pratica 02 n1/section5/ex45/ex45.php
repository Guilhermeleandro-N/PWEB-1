<?php 
require_once "helpers.php";
$nome = "Guilherme";
$valor = 1741.22
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    saudacao($nome); 
    echo "<br>O saldo de sua conta é ". formatado($valor);
    ?>
</body>
</html>