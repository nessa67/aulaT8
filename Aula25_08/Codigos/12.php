<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 12</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }
    </style>
</head>

<body style="<?php if (isset($_COOKIE['tema'])) {
    echo $_COOKIE['tema'] == 'escuro' ? 'background:#333;color:#fff;' : '';
} ?>">
    <h2>Escolha um tema:</h2>
    <form method="post">
        <select name="tema">
            <option value="claro">Claro</option>
            <option value="escuro">Escuro</option>
        </select>
        <input type="submit" value="Aplicar">
    </form>

    <?php
    if (isset($_POST['tema'])) {
        $corFundo = $_POST['tema'];
        setcookie("tema", $corFundo, time() + 30);
        echo "<p>Preferência <b>$corFundo</b> registrada!</p>";
        echo "<meta http-equiv='refresh' content='0'>"; // atualiza a página
    }

    if (isset($_COOKIE['tema'])) {
        echo "<p>A configuração escolhida é: <b>" . $_COOKIE['tema'] . "</b></p>";
    }
    ?>
</body>

</html>