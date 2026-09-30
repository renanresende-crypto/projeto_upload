<?php
$diretorio = __DIR__ . '/uploads';

if (!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
}

if (!isset($_FILES['arquivo']) || $_FILES['arquivo']['error'] !== UPLOAD_ERR_OK) {
    header('Location: upload.php?msg=' . urlencode('Erro no upload da imagem.'));
    exit;
}

$arquivo = $_FILES['arquivo'];
$tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

if (!in_array($arquivo['type'], $tiposPermitidos, true)) {
    header('Location: upload.php?msg=' . urlencode('Tipo de arquivo não permitido. Envie uma imagem JPG, PNG, GIF ou WEBP.'));
    exit;
}

$extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
$nomeFinal = uniqid('img_', true) . '.' . $extensao;
$destino = $diretorio . '/' . $nomeFinal;

if (!move_uploaded_file($arquivo['tmp_name'], $destino)) {
    header('Location: upload.php?msg=' . urlencode('Não foi possível salvar a imagem no servidor.'));
    exit;
}

header('Location: index.php?msg=' . urlencode('Imagem enviada com sucesso!'));
exit;
