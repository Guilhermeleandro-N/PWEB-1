<?php
if (isset($_POST['nomes']) && !empty($_POST['nomes'])){
    $nomes = $_POST['nomes'];
    
    $nomes = array_unique($nomes);
    echo "Nomes sem repetição na lista:<br>";
    foreach($nomes as $nome){
        echo "- " . "$nome<br>";
    }
}else{
    echo "Preencha o formulário corretamente.";
}