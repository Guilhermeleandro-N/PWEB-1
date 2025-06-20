<?php
if (isset($_POST['categorias']) && !empty($_POST['categorias'])  && isset($_POST['ordem']) && !empty($_POST['ordem'])) {
    $categorias = $_POST['categorias'];
    $ordem = $_POST['ordem'];

    if ($ordem === "crescente") {
        sort($categorias); 
    } elseif ($ordem === "decrescente") {
        rsort($categorias); 
    }

    echo "<h2>Categorias Ordenadas (" . ($ordem) . ")</h2>";
    foreach ($categorias as $categoria) {
        echo "- " . htmlspecialchars($categoria) . "<br>";
    }
} else {
    echo "Formulário incompleto. ";
}

