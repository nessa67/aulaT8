<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
    <style>
        body { font-family: Arial; margin: 20px; }
    </style>
</head>
<body>
    <h2>Sorteio de Número (1 a 100)</h2>
    <form method="post">
        <input type="submit" value="Sortear">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = rand(1, 100);
        echo "<p>Número sorteado: <b>$n</b></p>";
    }
    ?>
</body>
</html>
