<?php
$pastaDestino = 'uploads/';
if (isset($_FILES['arquivo']))  {
    $nomeArquivo = basename($_FILES['arquivo']['name']);
    $caminhoDestino = $pastaDestino . $nomeArquivo;

    // Verifica se o arquivo é uma imagem
    $tipoArquivo = strtolower(pathinfo($caminhoDestino, PATHINFO_EXTENSION));
    $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($tipoArquivo, $tiposPermitidos)) {
        if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminhoDestino)) {
            echo "Upload realizado com sucesso!";
            echo "<a href='index.php'>Ver galeria</a>";
        } else {
            echo "Erro ao salvar o arquivo.";
        }
    } else {
        echo "Tipo de arquivo não permitido. Envie apenas imagens (jpg, jpeg, png, gif).";
    
    }
    }else {
        echo "Nenhum arquivo enviado.";
    }
    ?>