<?php
require_once '../init.php';

// session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade']?? '';
    $categoria = $_POST['categoria']?? '';
    $imagem = $_POST['imagem']?? '';
    $id = $_POST['id']?? '';

    $produto = [
        'nome' => $nome,
        'preco' => $preco,
        'quantidade' => $quantidade,
        'categoria' => $categoria,
        'imagem' => $imagem,
        'id' => $id
    ];

    $_SESSION['produtos'][] = $produto;
};

header('Location:../index.php');
exit;

    // echo "Produto: " . $nome . "<br>";
    // echo "Preço: R$" . $preco . "<br>";
    // echo "Quantidade em Estoque: " . $quantidade . "<br>"; 
    // echo "Categoria: " . $categoria . "<br>";
    // echo "Imagem: " . $imagem . "<br>";
    // echo "Descição: " . $texto . "<br>";

?>