<?php
require_once('init.php');

$logado = isset($_SESSION['admin']);
$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="icon" href="imagens/logo.png">
    <title>Home - ConstruTech</title>
</head>

<body>

    <?php require_once('./partials/header.php') ?>

    <?php if (!$logado): ?>
    <div id="modalLogin" class="modal-overlay" role="dialog" aria-modal="true" aria-label="Login">
        <div class="modal-card">
            <div class="modal-header">
                <img src="imagens/logo2.png" alt="ConstruTech" class="modal-logo">
                <h2>Bem-vindo de volta</h2>
                <p>Faça login para acessar o sistema</p>
            </div>
            <form id="formLogin" novalidate>
                <div class="campo-form">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Admin" required autocomplete="username">
                </div>
                <div class="campo-form">
                    <label for="senha">Senha</label>
                    <div class="input-senha">
                        <input type="password" id="senha" name="senha" placeholder="••••••••" required autocomplete="current-password">
                        <button type="button" class="toggle-senha" id="toggleSenha" aria-label="Mostrar senha">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                <p id="erroLogin" class="erro-msg" style="display:none"></p>
                <button type="submit" class="btn-primary" id="btnLogin">
                    <span>Entrar</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </form>
            <p class="modal-hint">Use: <strong>Admin</strong> / <strong>admin123</strong></p>
        </div>
    </div>
    <?php endif; ?>

    <main class="<?php echo !$logado ? 'bloqueado' : ''; ?>">
        <div class="container">
            <nav>
                <ul class="filtro">
                    <li>
                        <a href="index.php"
                            class="<?php echo $categoria_get == '' ? 'ativo' : ''; ?>">
                            Todos
                        </a>
                    </li>

                    <?php
                    foreach ($categorias as $kcat => $nome) {
                        $ativo = ($categoria_get == $kcat) ? 'ativo' : '';

                        echo '
                    <li>
                        <a href="index.php?categoria=' . $kcat . '" class="' . $ativo . '">
                            ' . $nome . '
                        </a>
                    </li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>

        <div class="container-cards">
            <section id="produtos">
                <div class="grid-produtos">
                    <?php
                    foreach ($_SESSION['produtos'] as $produto) {

                        $classe = $produto['quantidade'] < 50 ? 'baixo' : ($produto['quantidade'] < 100 ? 'medio' : 'alto');

                        if ($categoria_get != '' && $produto['categoria'] != $categoria_get) {
                            continue;
                        }

                        echo '
                    <article class="produto">
                        <img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">
                        <div class="detalhes-card">
                            <h1>' . $produto['nome'] . '</h1>
                            <h2>R$ ' . number_format($produto['preco'], 2, ',', '.') . '</h2>
                            <h3>Qtd. em estoque: 
                                <span class="' . $classe . '">' . $produto['quantidade'] . '</span>
                            </h3>
                            <a href="detalhes.php?id=' . $produto['id'] . '" class="detalhes-btn">Ver detalhes</a>
                        </div>
                    </article>
                    ';
                    }
                    ?>
                </div>
            </section>
        </div>
    </main>

    <?php require_once('./partials/footer.php') ?>

    <script src="./js/login.js"></script>

</body>

</html>