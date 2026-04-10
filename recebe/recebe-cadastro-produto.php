<?php
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $categoria = $_POST['categoria'];
    $imagem = $_POST['imagem'];
    $texto = $_POST['descricao'];

    echo "Produto: " . $nome . "<br>";
    echo "Preço: R$" . $preco . "<br>";
    echo "Quantidade em Estoque: " . $quantidade . "<br>"; 
    echo "Categoria: " . $categoria . "<br>";
    echo "Imagem: " . $imagem . "<br>";
    echo "Descição: " . $texto . "<br>";