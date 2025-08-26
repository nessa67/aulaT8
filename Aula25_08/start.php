<?php
session_start(); // Sempre iniciar sessão

// Guardando nome do usuário
$_SESSION['usuario'] = "João";

// Exibindo o valor
echo "Usuário logado: " . $_SESSION['usuario'];
?>
