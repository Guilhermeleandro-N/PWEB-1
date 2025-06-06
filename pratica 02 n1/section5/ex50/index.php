<?php
include_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="mystyle.css">
    
</head>
<body> 

    <div class="header"> 
        
       <div  class="inlineblock "><a href="index.html"> MEMU</a></div>
        <div class="inlineblock"><a href="html.html"> HTML</a> </div> 
       <div class="inlineblock"><a href="css.html"> CSS</a></div> 
        <div class="inlineblock"><a href="javascript.html"> JAVASCRIPT</a></div> </div>
        
        <main>
            <h1><strong><?php $titulo ?></strong></h1> 
            <p><?php $conteudo ?></p>
            <div class="container">
             
                <div class="child"><a href="html.html"><img src="imagens/html.png" alt=""></a></div>
            
                <div class="child" ><a href="css.html"><img  src="imagens/css.png" alt="">
                </div>
            
                <div class="child"><a href="javascript.html"><img src="imagens/javascript.png" alt=""></a></div>         
                </div>
                <div class="footer">
                    <p>Created by Guilherme L. &copy;</p>
                </div>
        </main>
</body>
</html>