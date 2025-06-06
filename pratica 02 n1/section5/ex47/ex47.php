<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "bd.php";
    ?>
    <h1>Host:<?php echo $host ?></h1>

    <?php
    require_once "bd.php";
    ?>
    <h1>Usuario:<?php echo $usuario ?></h1>

        <?php
    require_once "bd.php";
    ?>
    <h1>Senha: <?php echo $senha ?></h1>
</body>
</html>