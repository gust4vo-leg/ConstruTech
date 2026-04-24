<?php
session_start();
require_once 'data.php';

$usuarios_validos = [
    ['nome' => 'Admin',   'senha' => 'admin123'],
    ['nome' => 'Gerente', 'senha' => 'gerente123'],
];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

$nome  = isset($_POST['nome'])  ? trim($_POST['nome'])  : '';
$senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';

if ($nome === '' || $senha === '') {
    echo json_encode(['ok' => false, 'msg' => 'Preencha todos os campos.']);
    exit;
}

$autenticado = false;
foreach ($usuarios_validos as $u) {
    if ($u['nome'] === $nome && $u['senha'] === $senha) {
        $autenticado = true;
        break;
    }
}

if ($autenticado) {
    $_SESSION['admin']   = true;  
    $_SESSION['usuario'] = $nome;
    echo json_encode(['ok' => true]);
} else {
    echo json_encode(['ok' => false, 'msg' => 'Nome ou senha incorretos.']);
}