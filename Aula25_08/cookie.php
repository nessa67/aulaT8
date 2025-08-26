<?php
// Criar cookie válido por 1 hora (3600 segundos)
setcookie("usuario", "Maria", time() + 30);

// Verificar se cookie existe
if(isset($_COOKIE['usuario'])){
    echo "Bem-vindo, " . $_COOKIE['usuario'];
} else {
    echo "Olá, visitante!";
}
?>
