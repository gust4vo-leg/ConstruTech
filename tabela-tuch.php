<?php
require_once 'init.php';

// Deletar produto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deletar_id'])) {
    $del_id = (int)$_POST['deletar_id'];
    $_SESSION['produtos'] = array_values(
        array_filter($_SESSION['produtos'], fn($p) => $p['id'] !== $del_id)
    );

    $_SESSION['mensagem'] = "Produto excluído com sucesso!!";
    header('Location: tabela-tuch.php');
    exit;
}

$total_valor = 0;
$total_qtd = 0;
$total_unit = 0;
foreach ($_SESSION['produtos'] as $p) {
    $total_valor += $p['preco'] * $p['quantidade'];
    $total_qtd   += $p['quantidade'];
    $total_unit  += $p['preco'];
}
// $media_preco = count($_SESSION['produtos']) > 0 ? $total_unit / count($_SESSION['produtos']) : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventário — ConstruTech</title>
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/tabela.css">
</head>

<body>
    <?php require_once 'partials/header.php'; ?>
    <main>
        <div class="container-pagina">
            <div class="tabela-header">
                <div>
                    <h1>Inventário</h1>
                    <p><?php echo count($_SESSION['produtos']); ?> produtos cadastrados</p>
                </div>
                <a href="cadastro_produtos.php" class="btn-header">
                    <i class="bi bi-plus-lg"></i> Novo Produto
                </a>
            </div>

            <?php if (isset($_SESSION['mensagem'])): ?>
                <div class="alerta alerta-ok">
                    <i class="bi bi-check-circle-fill"></i>
                    <?php echo $_SESSION['mensagem']; ?>
                </div>
                <?php unset($_SESSION['mensagem']); ?>
            <?php endif; ?>

            <div class="tabela-wrapper">
                <table class="tabela">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Categoria</th>
                            <th>Qtd.</th>
                            <th>Preço Unit.</th>
                            <th>Valor Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['produtos'] as $p): ?>
                            <tr> 
                                <td class="td-nome">
                                    <a href="detalhes.php?id=<?php echo $p['id']; ?>">
                                        <?php echo htmlspecialchars($p['nome']); ?>
                                    </a>
                                </td>
                                <td><span class="badge badge-<?php echo $p['categoria']; ?>">
                                        <?php echo $categorias[$p['categoria']] ?? $p['categoria']; ?>
                                    </span></td>
                                <td class="td-num 
                                <?php echo $p['quantidade'] < 50 ? 'baixo' : (($p['quantidade'] < 100) ? 'medio' : 'alto'); ?>">
                                    <?php echo $p['quantidade']; ?>
                                </td>
                                <td class="td-num">R$ <?php echo number_format($p['preco'], 2, ',', '.'); ?></td>
                                <td class="td-num">R$ <?php echo number_format($p['preco'] * $p['quantidade'], 2, ',', '.'); ?></td>
                                <td class="td-acao">
                                    <a href="detalhes.php?id=<?php echo $p['id']; ?>" class="btn-acao btn-ver" title="Ver detalhes">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>

                                    <!-- deletar -->
                                    <form method="POST" style="display:inline"
                                        onsubmit="return confirm('Deletar <?php echo htmlspecialchars($p['nome']); ?>?')">
                                        <input type="hidden" name="deletar_id" value="<?php echo $p['id']; ?>">
                                        <button type="submit" class="btn-acao btn-del" title="Excluir">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </form>
                                    <!-- ------------ -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr class="rodape-tabela">
                            <td colspan="2"><strong>Totais</strong></td>
                            <td class="td-num <?php echo $total_qtd < 50 ? 'baixo' : ($total_qtd < 100 ? 'medio' : 'alto'); ?>"><strong><?php echo $total_qtd; ?></strong></td>
                            <td class="td-num">
                                <strong>R$ <?php echo number_format($total_unit, 2, ',', '.'); ?></strong>
                            </td>
                            <td class="td-num destaque">
                                <strong>R$ <?php echo number_format($total_valor, 2, ',', '.'); ?></strong>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </main>
    <?php require_once 'partials/footer.php'; ?>
</body>

</html>