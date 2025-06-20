<?php

if (isset($_POST['livros']) && !empty($_POST['livros'])) {
    $livros = $_POST['livros'];

   echo "<h2>Livros na biblioteca:</h2>";
    foreach ($livros as $livro) {
        echo "- " . $livro . "<br>";
    }

    echo "Livro vendido: ". $livros[2]. "<br>";
    unset($livros[2]);

    
    $livros = array_values($livros);

    
    echo "<h2>Livros na biblioteca(atualizado):</h2>";
    foreach ($livros as $livro) {
        echo "- " . $livro . "<br>";
    }
}else{
    echo "Responda o formulário corretamente.";
}