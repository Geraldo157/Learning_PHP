<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST" action="code.php">
    <p>Qual o nome do jogador que você quer adicionar?</p>
    <input type="text" placeholder="Nome" name="nome">
    <p>Qual o numero da camisa dele??</p>
    <input type="text" placeholder="Nº da Camisa" name="jersey">
    <p>Qual a posição do jogador?</p>
    <input type="text" placeholder="position" name="position">
    <p>Qual o ano que ele chegou no Flamengo?</p>
    <input type="text" placeholder="Ano" name="year">
    <button type="submit">Enviar</button>
</form>
<? include 'code.php'?>
</body>
</html>