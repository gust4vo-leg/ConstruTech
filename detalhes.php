<?php
require_once('./init.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$produto = null;

foreach ($produtos_base as $item) {
    if ($item['id'] === $id) {
        $produto = $item;
        break;
    }
};
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="stylesheet" href="./css/detalhes.css">
</head>
<body>

<?php 
require_once('./partials/header.php')
?>

<main>
    <div class="box-container">
        <div class="box">
            <div class="container-img">
                <div class="card-img"><img src=<?php echo $produto['imagem']?> /></div>
            </div>

            <div class="container-info">
                <h1><?php echo $produto['nome']?></h1>

                <span class="id"><b style="font-weight: 500;">Código (ID):</b> <?php echo $produto['id']?></span>

                <hr>

                <strong>R$ <?php echo number_format($produto['preco'], 2, ',','.')?></strong>

                <h2>Categoria:</h2>

                <a><?php echo $produto['categoria']?></a>

                <form action="data.php" method="$_POST">
                    <h3>Qtd. em estoque: &nbsp; <span class="verde"><i class="bi bi-plus-circle-fill"></i></span> &nbsp;
                    <?php echo $produto['quantidade']?>
                    &nbsp; <span class="vermelho"><i class="bi bi-dash-circle-fill"></i></span></h3>
                </form>

                <h4 class="alerta" style="display:<?php echo ($produto['quantidade'] <= 70) ? "block" : "none"?>;"> <i class="bi bi-exclamation-circle"></i> &nbsp;Estoque baixo</h4>
            </div>
        </div>
    </div>
</main>



<?php 
require_once('./partials/footer.php')
?>

</body>
</html>