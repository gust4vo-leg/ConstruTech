<?php
session_start();

$usuario = $_POST['nome'] ?? '';
$senha   = $_POST['senha'] ?? '';

if ($usuario === 'admin' && $senha === '123') {

    $_SESSION['admin'] = true;

} else {

    $_SESSION['erro'] = "Login inválido!";
}

header('Location: index.php');
exit;