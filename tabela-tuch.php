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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header_footer.css">
</head>

<body>
    <?php
    require_once('partials/header.php');
    ?>
    <main>
        <section class="table">
            <div class="tabela-produto">
                <div class="linha-cabecalho">
                    <div>Produto</div>
                    <div>Categoria</div>
                    <div>Quantidade em Estoque</div>
                    <div>Preço Unitário (R$)</div>
                    <div>Valor Total (R$)</div>
                </div>
                <?php
                foreach ($produtos_base as $produto) {
                    echo '
                    <div class="linha">
                <div class="nome">' . $produto['nome'] . '</div>
                <div class="categoria">' . $produto['categoria'] . '</div>
                <div class="quantidade">' . $produto['quantidade'] . '</div>
                <div class="preco">R$ ' . number_format($produto['preco'], 2, ',', '.') . '</div>
                <div class="preco-total">R$ ' . number_format($produto['preco_total'], 2, ',', '.') . '</div>
                <div><i class="bi bi-trash3-fill"></i></div>
                </div>
                ';
                }
                ?>
                <?php
                $total_geral = 0;
                $total_geral_unitario = 0;
                $total_geral_quantidade = 0;

                foreach ($produtos_base as $produto) {
                    $total_geral += $produto['preco_total'];
                    $total_geral_unitario += $produto['preco'];
                    $total_geral_quantidade += $produto['quantidade'];
                }

                echo '
                <div class="rodape-tabela">
                    <div class="valor">Valor Total: </div>
                    <div class="#">--</div>
                    <div class="quantidade-final">'. $total_geral_quantidade .'</div>
                    <div class="preco-final">R$ '. number_format($total_geral_unitario, 2, ',', '.') .'</div>
                    <div class="preco-total-final">R$ '. number_format($total_geral, 2, ',', '.') .'</div>
                </div>
                ';
                ?>
            </div>
        </section>
    </main>
    <?php
    require_once('partials//footer.php');
    ?>
</body>

</html>