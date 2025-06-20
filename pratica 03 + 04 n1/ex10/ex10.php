<?php
if (isset($_POST['nomes']) && !empty($_POST['nomes'])){
    $listaParticipantes = $_POST['nomes'];
    
    $listaParticipantes = array_unique($listaParticipantes);
    echo "Nomes sem repetição na lista:<br>";
    foreach($listaParticipantes as $nome){
        echo "- " . "$nome<br>";
    }
}else{
    echo "Preencha o formulário corretamente.";
}