<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 14</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        input {
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <h2>Login Simples com Sessão</h2>

    <?php
    session_start();

    // Logout
    if (isset($_POST['logout'])) {
        session_destroy();
        echo "<p>Sessão encerrada.</p>";
        echo "<meta http-equiv='refresh' content='0'>";
    }

    // Verifica login
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if ($usuario == "admin" && $senha == "123") {
            $_SESSION['usuario'] = $usuario;
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "<p style='color:red;'>Usuário ou senha incorretos!</p>";
        }
    }

    // Se já logado
    if (isset($_SESSION['usuario'])) {
        echo "<p>Bem-vindo, <b>" . $_SESSION['usuario'] . "</b>!</p>";
        echo '<form method="post"><input type="submit" name="logout" value="Sair"></form>';
    } else {
        // Form de login só aparece se não estiver logado
        echo '<form method="post">
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="Entrar">
              </form>';
    }
    ?>
</body>

</html>