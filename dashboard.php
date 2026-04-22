<?php
require_once('init.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ConstruTech</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/header_footer.css">
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
                    <h2>1067</h2>
                </div>

                <div class="card">
                    <div class="topo-card">
                        <h1>Valor do estoque</h1>
                        <span><i class="bi bi-cash-coin"></i></span>
                    </div>
                    <h2>R$ 5092,00</h2>
                </div>

                <div class="card">
                <div class="topo-card">
                    <h1>Valor médio por produto</h1>
                    <span><i class="bi bi-clipboard2-pulse-fill"></i></span>
                </div>
                <h2>R$ 1067,00</h2>
            </div>
            </div>

            <div class="grafico">
                <div class="card-grafico-barras">
                    <h1>Produtos por categoria</h1>
                    <div class="grafico-barras">
                        <div class="valores">
                            <span>18</span>
                            <span>15</span>
                            <span>12</span>
                            <span>9</span>
                            <span>6</span>
                            <span>3</span>
                            
                        </div>

                        <span class="barras" style="height: 70%;"><h1>Bruto</h1></span> 

                        <span class="barras" style="height: 40%;"><h1>Ferramentas</h1></span>

                        <span class="barras" style="height: 60%;"><h1>Acabamento</h1></span>

                        <span class="barras" style="height: 90%;"><h1>Total</h1></span>
                    </div>
                </div>

                <div class="card-grafico-linha">
                    <h1>Estoque por Categoria</h1>
                    <div class="grafico-linha">
                        <label>Bruto</label> <span class="medidor"></span> <span class="gambiarra" style="width: 50%;"></span>

                        <label>Ferramentas</label> <span class="medidor"></span> <span class="gambiarra" style="width: 20%;"></span>

                        <label>Acabamento</label> <span class="medidor"></span> <span class="gambiarra" style="width: 70%;"></span>
                    </div>
                </div>
            </div>
    </main>

    <?php
    require_once('./partials/footer.php');
    ?>

</body>

</html>