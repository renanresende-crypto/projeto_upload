<?php
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
    <form action="processo_upload.php" method="post" enctype="multipart/form-data">
        <label for="arquivo">Selecione a imagem:</label>
        <input type="file" id="arquivo" name="arquivo" required> <br><br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="index.php">Voltar para a galeria</a>
</body>
</html>
