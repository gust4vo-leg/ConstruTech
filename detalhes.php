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

                <strong>R$ <?php echo number_format($produto['preco'], 2, ',','.')?></strong>

                <h2>Categoria:</h2>

                <a><?php echo $produto['categoria']?></a>

                <form action="data.php" method="$_POST">
                    <h3>Qtd. em estoque: &nbsp; <span class="verde"><i class="bi bi-plus-circle-fill"></i></span> &nbsp;
                    <strong class="<?php echo $produto['quantidade'] < 50 ? 'baixo' : (($produto['quantidade'] < 100) ? 'medio' : 'alto'); ?>"> <?php echo $produto['quantidade']?> </strong>
                    &nbsp; <span class="vermelho"><i class="bi bi-dash-circle-fill"></i></span></h3>
                </form>
            </div>
        </div>
    </div>
</main>



<?php 
require_once('./partials/footer.php')
?>

</body>
</html>