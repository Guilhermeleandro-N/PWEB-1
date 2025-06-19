<?php
$nomeEnviado = 1;
if (isset($_POST['nome']) && !empty($_POST['nome'])){
    $nomeEnviado = 0;
    $nome = $_POST['nome'];
}
// Define o diretório onde as imagens serão armazenadas
$diretorioDestino = "uploads/";

// Concatena o diretório com o nome original do arquivo enviado
$arquivoDestino   = $diretorioDestino . basename($_FILES["arquivoParaEnviar"]["name"]);
$uploadOk         = 1;

// Extrai a extensão do arquivo (em minúsculas)
$tipoArquivo      = strtolower(pathinfo($arquivoDestino, PATHINFO_EXTENSION));

// Verifica se o arquivo é uma imagem válida

if (isset($_POST["enviar"])) {
    $check = getimagesize($_FILES["arquivoParaEnviar"]["tmp_name"]);
    if ($check !== false) {
        echo "Arquivo é uma imagem - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "Arquivo não é uma imagem.<br>";
        $uploadOk = 0;
    }
}

// Verifica se o arquivo já existe no diretório de destino
if (file_exists($arquivoDestino)) {
    echo "Desculpe, o arquivo já existe.<br>";
    $uploadOk = 0;
}


// Verifica o tamanho do arquivo (500 KB)
if ($_FILES["arquivoParaEnviar"]["size"] > 500000) {
    echo "Desculpe, seu arquivo é muito grande.<br>";
    $uploadOk = 0;
}

// Permite apenas imagens nos formatos: JPG, JPEG, PNG e GIF
if (
    $tipoArquivo !== "jpg" &&
    $tipoArquivo !== "png" &&
    $tipoArquivo !== "jpeg" &&
    $tipoArquivo !== "gif"
) {
    echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.<br>";
    $uploadOk = 0;
}

// Verifica se houve algum erro nas validações anteriores

if ($uploadOk === 0 and $nomeEnviado === 0) {
    if($nomeEnviado===1){
        echo "Prencha o formulário corretamente.<br>";
    }
    if($uploadOk===1){
        echo "Desculpe, seu arquivo não foi enviado.<br>";
    }
    
} else {
    // Se todas as validações passaram, tenta mover o arquivo para o diretório de destino
    if (move_uploaded_file($_FILES["arquivoParaEnviar"]["tmp_name"], $arquivoDestino)) {
        echo "O arquivo \"" . htmlspecialchars(basename($_FILES["arquivoParaEnviar"]["name"])) 
        . "\" foi enviado com sucesso.<br>";
        echo "<h1>Nome: $nome </h1><br>";
        echo "<img src='" . $arquivoDestino . "' alt='Imagem enviada' width='200' height='150' />";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar seu arquivo.<br>";
    }
}
