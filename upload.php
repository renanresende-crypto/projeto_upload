<?php
$mensagem = $_GET['msg'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de imagem</title>
</head>
<body>
    <h1>Enviar imagem</h1>
    <a href="index.php">Voltar para a galeria</a>
    <hr>

    <?php if ($mensagem !== '') : ?>
        <p><?php echo htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <form action="processo_upload.php" method="post" enctype="multipart/form-data">
        <label for="arquivo">Selecione a imagem:</label>
        <input type="file" id="arquivo" name="arquivo" accept="image/*" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
