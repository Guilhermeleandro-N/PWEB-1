<?php 
    $curriculo = "Técnico em Administração e graduando em Sistemas de Informação no IFCE Cedro. Atuo com desenvolvimento web (HTML, CSS, JavaScript, PHP, FastAPI e MySQL) e tenho interesse em gestão organizacional e levantamento de requisitos. Busco unir tecnologia e estratégia para criar soluções eficientes e funcionais.";

    echo "Quantidade de caracteres:<br>". strlen($curriculo). "<br>";

    echo "Ocorrência de cada caractere: <br>";
    foreach (count_chars($curriculo,1) as $i => $val){
        echo "Há $val instância(s) de \"". chr($i). "\" na string.<br>";
    }
