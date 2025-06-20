<?php
if (isset($_POST['nomes']) && !empty($_POST['nomes'])  && isset($_POST['precos']) && !empty($_POST['precos'])) {

    $nomes  = $_POST["nomes"];
    $precos = $_POST["precos"];
    $precosProdutos = [];

    
    for ($i = 0; $i < count($nomes); $i++) {
        $nomeProduto = ($nomes[$i]);
        $precoProduto = ($precos[$i]);
        $precosProdutos[$nomeProduto] = $precoProduto;
    }

    asort($precosProdutos);

    echo "<h2>Relatório de Ofertas (ordenado)</h2>";
    
    foreach ($precosProdutos as $produto => $preco) {
        echo "- " . htmlspecialchars($produto) . ": R$ " . number_format($preco, 2, ',', '.') . "<br>";
    }
    
} else {
    echo "Preencha o formulário corretamente.";
}
?>
