<?php
require_once('init.php');

$totalQuantidade = 0;
$totalUnitario = 0;
$total = 0;

foreach ($produtos_base as $produto) {
    $totalQuantidade += $produto['quantidade'];
};

foreach ($produtos_base as $produto) {
    $total += $produto['preco'] * $produto['quantidade'];
};

$valorMedio = $total / $totalQuantidade;

$totalBruto = 0;

$totalFerramentas = 0;

$totalAcabamento = 0;

foreach ($produtos_base as $produto) {
    if ($produto['categoria'] === 'bruto') {
        $totalBruto ++;
    }
    elseif ($produto['categoria'] === 'ferramentas') {
        $totalFerramentas ++;
    }
    else {
        $totalAcabamento ++;
    }
};

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ConstruTech</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="icon" href="imagens/logo.png">
</head>

<body>
    <?php
    require_once('./partials/header.php');
    ?>

    <main>
        <div class="titulo-dashboard">
            <h1>Constru<span class="laranja">Tech</span> &nbsp; <span class="divisoria"></span></h1> &nbsp;&nbsp; <h2>Dashboard</h2>
        </div>

        <div class="dashboard">
            <div class=container-card>
                <div class="card">
                    <div class="topo-card">
                        <h1>Qtd. de itens em estoque</h1>
                        <span><i class="bi bi-clipboard2-data-fill"></i></span>
                    </div>
                    <h2><?php echo $totalQuantidade?></h2>
                </div>

                <div class="card">
                    <div class="topo-card">
                        <h1>Valor do estoque</h1>
                        <span><i class="bi bi-cash-coin"></i></span>
                    </div>
                    <h2>R$ <?php echo number_format($total, 2, ',', '.') ?></h2>
                </div>

                <div class="card">
                <div class="topo-card">
                    <h1>Valor médio por produto</h1>
                    <span><i class="bi bi-clipboard2-pulse-fill"></i></span>
                </div>
                <h2>R$ <?php echo number_format($valorMedio, 2, ',', '.') ?></h2>
            </div>
            </div>

            <div class="grafico">
                <div class="card-grafico-barras">
                    <h1>Produtos por categoria</h1>
                    <div class="grafico-barras">
                        <div class="valores">
                            <span>25</span>
                            <span>20</span>
                            <span>15</span>
                            <span>10</span>
                            <span>5</span>
                            <span>0</span>
                            
                        </div>

                        <span class="barras" style="height: <?php echo ($totalBruto / 25) * 100?>%;"><h1>Bruto</h1></span> 

                        <span class="barras" style="height: <?php echo ($totalFerramentas / 25) * 100?>%;"><h1>Ferramentas</h1></span>

                        <span class="barras" style="height: <?php echo ($totalAcabamento / 25) * 100?>%;"><h1>Acabamento</h1></span>

                        <span class="barras" style="height: <?php echo (($totalBruto / 25) * 100) + (($totalFerramentas / 25) * 100) + (($totalAcabamento/ 25) * 100)?>%;"><h1>Total</h1></span>
                    </div>
                </div>

                <div class="card-grafico-linha">
                    <h1>Estoque por Categoria</h1>
                    <div class="grafico-linha">
                        <label>Bruto</label> <span class="medidor"></span> <span class="gambiarra" style="width: <?php echo ($totalBruto / 18) * 100?>%;"></span>

                        <label>Ferramentas</label> <span class="medidor"></span> <span class="gambiarra" style="width: <?php echo ($totalFerramentas / 18) * 100?>%;"></span>

                        <label>Acabamento</label> <span class="medidor"></span> <span class="gambiarra" style="width: <?php echo ($totalAcabamento / 18) * 100?>%;"></span>
                    </div>
                </div>
            </div>
    </main>

    <?php
    require_once('./partials/footer.php');
    ?>

</body>

</html>