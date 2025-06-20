<?php
if (isset($_POST['fonteA']) && !empty($_POST['fonteA']) && isset($_POST['fonteB']) && !empty($_POST['fonteB'])){
    $fonteA = $_POST['fonteA'];
    $fonteB = $_POST['fonteB'];

    $todosIds = array_unique(array_merge($fonteA, $fonteB));

    echo "ID'S unicos:<br>";
    foreach($todosIds as $ID){
        echo "- " . "$ID<br>";
    }
}else{
    echo "Preencha o formulário corretamente.";
}