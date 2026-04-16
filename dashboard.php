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
                
            </div>
    </main>

    <?php
    require_once('./partials/footer.php');
    ?>

</body>

</html>