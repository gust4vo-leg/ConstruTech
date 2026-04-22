<?php
require_once('init.php');

// session_destroy();
// session_start();
// $_SESSION['produtos'] = $produtos_base;

$logado = isset($_SESSION['logado']) ? $_SESSION['logado'] : false;
$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header_footer.css">
    <title>Home - ConstruTech</title>
</head>

<body>

    <?php require_once('./partials/header.php') ?>

    <!-- <?php if (!$logado): ?>
        <div id="loginModal" class="modal">
            <section>
                <div class="card">
                    <h4>Login</h4>
                    <form id="formLogin">
                        <div class="input-box">
                            <input type="text" name="nome" required>
                            <label>Nome Completo</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="senha" required>
                            <label>Senha</label>
                        </div>

                        <button class="btn-login"type="submit">Entrar</button>

                        <p class="p-login">Ainda não tem conta? <a class="a-login" href="cadastro.php">Criar conta</a></p>
                    </form>
                </div>
            </section>
        </div>
    <?php endif; ?> -->

    <main>
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
                    // echo '<pre>';
                    // print_r($_SESSION['produtos']);
                    // echo '</pre>';

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

                            <a href="detalhes.php?id='. $produto['id'] .'" \'class="detalhes-btn">Ver detalhes</a>
                        </div>
                    </article>
                    ';
                    }
                    ?>

                </div>

            </section>
        </div>
    </main>

    <script src="java/login.js"></script>

    <?php require_once('./partials/footer.php') ?>

</body>

</html>