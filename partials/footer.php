<?php

require_once 'init.php';


// Calcula estatísticas do rodapé a partir da sessão
$produtos_footer = isset($_SESSION['produtos']) ? $_SESSION['produtos'] : [];
$total_valor = 0;
$total_qtd   = 0;
$mais_caro   = null;
$mais_barato = null;
$soma_precos = 0;

foreach ($produtos_footer as $pf) {
    $total_valor += $pf['preco'] * $pf['quantidade'];
    $total_qtd   += $pf['quantidade'];
    $soma_precos += $pf['preco'];
    if ($mais_caro   === null || $pf['preco'] > $mais_caro['preco'])   $mais_caro   = $pf;
    if ($mais_barato === null || $pf['preco'] < $mais_barato['preco']) $mais_barato = $pf;
};

$media = $total_valor / $total_qtd;

$cats = ['bruto' => [], 'ferramentas' => [], 'acabamento' => []];
foreach ($produtos_footer as $pf) {
    if (isset($cats[$pf['categoria']])) {
        $cats[$pf['categoria']][] = $pf['nome'];
    }
}
?>
<footer class="rodape">
    <div class="rodape-grid">
        <div class="rodape-col">
            <h4><i class="bi bi-wallet2"></i> Totais</h4>
            <ul>
                <li>Valor em estoque: <strong>R$ <?php echo number_format($total_valor, 2, ',', '.'); ?></strong></li>
                <li>Total de itens: <strong><?php echo $total_qtd; ?></strong></li>
                <li>Produtos cadastrados: <strong><?php echo count($produtos_footer); ?></strong></li>
            </ul>
        </div>

        <div class="rodape-col">
            <h4><i class="bi bi-boxes"></i> Categorias</h4>
            <?php foreach ($cats as $cat => $nomes): ?>
                <details class="rodape-details">
                    <summary><?php echo ucfirst($cat); ?> <span>(<?php echo count($nomes); ?>)</span></summary>
                    <div class="rodape-details-lista">
                        <?php foreach (array_slice($nomes, 0, 4) as $n): ?>
                            <p><?php echo htmlspecialchars($n); ?></p>
                        <?php endforeach; ?>
                        <?php if (count($nomes) > 4): ?>
                            <p class="rodape-mais">+<?php echo count($nomes) - 4; ?> mais</p>
                        <?php endif; ?>
                    </div>
                </details>
            <?php endforeach; ?>
        </div>

        <div class="rodape-col">
            <h4><i class="bi bi-graph-up"></i> Estatísticas</h4>
            <ul>
                <li>Mais caro: <strong><?php echo $mais_caro ? htmlspecialchars($mais_caro['nome']) . ' (R$ ' . number_format($mais_caro['preco'], 2, ',', '.') . ')' : '—'; ?></strong></li>
                <li>Mais barato: <strong><?php echo $mais_barato ? htmlspecialchars($mais_barato['nome']) . ' (R$ ' . number_format($mais_barato['preco'], 2, ',', '.') . ')' : '—'; ?></strong></li>
                <li>Preço médio: <strong>R$ <?php echo number_format($media, 2, ',', '.'); ?></strong></li>
            </ul>
        </div>
    </div>
    <div class="rodape-barra">
        <img src="imagens/logo2.png" alt="ConstruTech">
        <p>© 2026 — ConstruTech</p>
    </div>
</footer>