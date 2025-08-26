<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; }
        td { border: 1px solid #333; padding: 5px; }
    </style>
</head>
<body>
    <h2>Tabuada</h2>
    <form method="post">
        <input type="number" name="num" placeholder="Digite um número">
        <input type="submit" value="Gerar">
    </form>

    <?php
    if (isset($_POST['num'])) {
        $n = $_POST['num'];
        echo "<h3>Tabuada do $n</h3>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$n x $i</td><td>" . ($n*$i) . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
