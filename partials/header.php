<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<header class="topo">
    <div class="topo-inner">
        <a href="index.php" class="logo-link">
            <img src="imagens/logo2.png" alt="ConstruTech" class="logo-img">
        </a>

        <nav class="topo-nav">
            <a href="index.php"><i class="bi bi-house-fill"></i> Início</a>
            <a href="tabela-tuch.php"><i class="bi bi-stack"></i> Inventário</a>
            <a href="dashboard.php"><i class="bi bi-bar-chart-fill"></i> Dashboard</a>
            <a href="configuracao.php"><i class="bi bi-sliders"></i> Config.</a>
        </nav>

        <div class="topo-acoes">
            <a href="cadastro_produtos.php" class="btn-header">
                <i class="bi bi-plus-lg"></i> Novo Produto
            </a>
        </div>
    </div>

    <!-- Sidebar mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <aside class="sidebar" id="sidebar">
        <button class="sidebar-fechar" id="sidebarFechar"><i class="bi bi-x-lg"></i></button>
        <div class="sidebar-perfil">
            <i class="bi bi-person-circle"></i>
            <p><?php echo !empty($_SESSION['usuario']) ? htmlspecialchars($_SESSION['usuario']) : 'Visitante'; ?></p>
        </div>
        <nav class="sidebar-nav">
            <a href="index.php"><i class="bi bi-house-fill"></i> Início</a>
            <a href="tabela-tuch.php"><i class="bi bi-stack"></i> Inventário</a>
            <a href="dashboard.php"><i class="bi bi-bar-chart-fill"></i> Dashboard</a>
            <a href="configuracao.php"><i class="bi bi-sliders"></i> Configurações</a>
            <a href="cadastro_produto.php"><i class="bi bi-plus-circle-fill"></i> Novo Produto</a>
            <?php if (!empty($_SESSION['logado'])): ?>
                <a href="logout.php" class="sidebar-sair"><i class="bi bi-box-arrow-right"></i> Sair</a>
            <?php endif; ?>
        </nav>
    </aside>
</header>

<script>
    (function() {
        const btn = document.getElementById('btnMenu');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const fechar = document.getElementById('sidebarFechar');

        function abrir() {
            sidebar.classList.add('open');
            overlay.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function fecharSidebar() {
            sidebar.classList.remove('open');
            overlay.classList.remove('open');
            document.body.style.overflow = '';
        }
        if (btn) btn.addEventListener('click', abrir);
        if (overlay) overlay.addEventListener('click', fecharSidebar);
        if (fechar) fechar.addEventListener('click', fecharSidebar);
    })();
</script>