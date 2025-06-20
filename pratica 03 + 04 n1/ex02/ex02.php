<?php
if (
    isset($_POST['portugues']) && !empty($_POST['portugues']) &&
    isset($_POST['matematica']) && !empty($_POST['matematica']) &&
    isset($_POST['historia']) && !empty($_POST['historia']) &&
    isset($_POST['geografia']) && !empty($_POST['geografia'])
){
    $boletim = [
            "Português"  => $_POST["portugues"],
            "Matemática" => $_POST["matematica"],
            "História"   => $_POST["historia"],
            "Geografia"  => $_POST["geografia"]
    ];
    echo "<h1> Boletim</h1>";
    foreach ($boletim as $materia => $nota){
        if(($nota >= 7.0)){
            $situacao =  "Aprovado";
        }else{
            $situacao = "Reprovado";
        }
        echo "$materia: $nota <br> $situacao<br><br>";
    }

}else{
    echo "Por favor preencha o formulário corretamente.";
}