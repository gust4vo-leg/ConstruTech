<?php
require_once 'data.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Thuc</title>
    <link rel="stylesheet" href="css/tabela.css">
</head>

<body>
    <section class="table">
        <div class="tabela-produto">
            <div class="linha-cabecalho">
                <div>Produto</div>
                <div>Categoria</div>
                <div>Quantidade em Estoque</div>
                <div>Preço Unitário (R$)</div>
                <div>Valor Total (R$)</div>
            </div>
            <div class="linha">
                <?php
                foreach ($produtos_base as $produto) {
                    echo '
                <div class="nome">' . $produto['nome'] . '</div>
                <div class="categoria">' . $produto['categoria'] . '</div>
                <div class="quantidade">' . $produto['quantidade'] . '</div>
                <div class="preco">R$ '.number_format($produto['preco'], 2, ',', '.').'</div>
                <div class="preco-total">R$ ' . number_format($produto['preco_total'], 2, ',', '.' ). '</div>
                ';
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>