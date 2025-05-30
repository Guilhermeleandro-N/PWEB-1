<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <div style="background-color : green;">
    <?php
        function tabuada($numero){
            echo "Tabuada $numero<br>";
            for ($i =1; $i<=10; $i++){
                $valor = $numero * $i; 
                echo "$numero x $i = $valor<br>";
            }
        }
        tabuada(1);
    ?>
    </div>

    <div style="background-color: blue;">
        <?php
        tabuada(2)
        ?>
    </div>

    <div style="background-color: yellow;">
        <?php
        tabuada(3)
        ?>
    </div>

    <div style="background-color: purple;">
        <?php
        tabuada(4)
        ?>
    </div>

    <div style="background-color: brown;">
        <?php
        tabuada(5)
        ?>
    </div>
    
</body>
</html>