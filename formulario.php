<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="utf-8">
    <title> Upload de Arquivos </title>
</head>
<body>
  <form action="upload.php" enctype="multipart/form-data" method="post">

        <p> Seu nome: <input type="text" name="onome"> </p>
        <p> Cidade: <input type="text" name="acidade"> </p>

        <p> <input type="file" name="meuArquivo"> </p>

        <p> <button type="submit" > Enviar Arquivo </button> </p>
</form>
</body>
</html>
