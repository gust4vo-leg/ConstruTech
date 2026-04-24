<?php
require_once 'init.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;


$ids = array_column($_SESSION['produtos'], 'id');

$index = array_search($id, $ids);

$produto = $_SESSION['produtos'][$index];

if ($index != false) {
    $produto = $_SESSION['produtos'][$index];
};

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao'])) {
    foreach ($_SESSION['produtos'] as &$p) {
        if ($p['id'] === $id) {
            if ($_POST['acao'] === 'add') $p['quantidade']++;
            if ($_POST['acao'] === 'sub' && $p['quantidade'] > 0) $p['quantidade']--;
            break;
        }
    }
    unset($p);
    header('Location: detalhes.php?id=' . $id);
    exit;
}

$produto = null;
foreach ($_SESSION['produtos'] as $item) {
    if ($item['id'] === $id) {
        $produto = $item;
        break;
    }
}

if (!$produto) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes - ConstruTech</title>
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="stylesheet" href="./css/detalhes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <?php
    require_once('./partials/header.php')
    ?>

    <main>
        <div class="container-pagina">
            <a href="index.php" class="voltar-link"><i class="bi bi-arrow-left"></i> Voltar ao catálogo</a>
            <div class="box-container">
                <div class="box">
                    <div class="container-img">
                        <div class="card-img"><img src=<?php echo $produto['imagem'] ?> /></div>
                    </div>

                    <div class="container-info">
                        <h1><?php echo $produto['nome'] ?></h1>

                        <span class="id"><b style="font-weight: 500;">Código (ID):</b> <?php echo $produto['id'] ?></span>

                        <hr>

                        <strong>R$ <?php echo number_format($produto['preco'], 2, ',', '.') ?></strong>
                        <p class="detalhe-total">
                            Valor total em estoque:
                            <strong>R$ <?php echo number_format($produto['preco'] * $produto['quantidade'], 2, ',', '.'); ?></strong>
                        </p>

                        <h2>Categoria:</h2>

                        <a><?php echo $produto['categoria'] ?></a>
                        
                        <h3>Quantidade em Estoque: </h3>
                        
                        <div class="quantidade-card">

                            <form method="POST" style="display:inline">
                                <input type="hidden" name="acao" value="sub">
                                <button class="vermelho btn-menos"
                                    <?php echo $produto['quantidade'] === 0 ? 'disabled' : ''; ?>>
                                    <i class="bi bi-dash-circle-fill"></i>
                                </button>
                            </form>
                            <span class="estoque-num">
                                <?php echo $produto['quantidade']; ?>
                            </span>
                            <form method="POST" style="display:inline">
                                <input type="hidden" name="acao" value="add">
                                <button class="verde btn-mais">
                                    <i class="bi bi-plus-circle-fill"></i>
                                </button>
                            </form>
                        </div>
                        <h4 class="alerta" style="display:<?php echo ($produto['quantidade'] <= 50) ? "block" : "none" ?>;"> <i class="bi bi-exclamation-circle"></i> &nbsp;Estoque baixo</h4>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    require_once('./partials/footer.php')
    ?>

</body>

</html>