<?php
if (isset($_POST['temperaturas']) && !empty($_POST['temperaturas'])){
$temperaturasDiarias = $_POST['temperaturas'];

    $maxima = max($temperaturasDiarias);
    $minima = min($temperaturasDiarias);

    echo "<h2>Resultados</h2>";
    echo "Temperatura maxima: " . $maxima . "<br>";
    echo "Temperatura minima: " . $minima . "<br>";

} else {
    echo "Erro ao processar o formulário. <a href='formulario.html'>Tente novamente</a>";
}