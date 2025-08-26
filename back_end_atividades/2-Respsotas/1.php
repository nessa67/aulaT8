<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        input { padding: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h2>Digite seu nome:</h2>
    <form method="post">
        <input type="text" name="nome" placeholder="Seu nome">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        echo "<h3>Olá, $nome! Seja bem-vindo!</h3>";
    }
    ?>
</body>
</html>
