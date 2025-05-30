<?php
$pweb = [
    "Mark" => 7,
    "Nolan" => 10,
    "Debbie" => 8,
    "Gerry" => 6,
    "Hermione" => 10,
    "Jolyne" => 8,
    "Jotaro" => 3,
    "Jean" => 10,
    "Bob" => 2,
    "Patrick" => 0
];
echo "<h1>Nota dos alunos</h1>";
foreach ($pweb as $nome => $nota){
    echo "Nome: $nome<br>Nota: $nota<br><br>";
}