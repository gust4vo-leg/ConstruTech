<?php 
require_once('init.php');
$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header_footer.css">
    <title></title>
</head>
<body>
    <?php 
    require_once('./partials/header.php')
    ?>

    <main>
        <nav>
            <ul class="filtro">
                <?php
                foreach ($categorias as $key => $value) {
                    print '<a href="produtos.php?categoria='.$key. '"class="nav-elementos"><li>' . $value . '</li></a>';
                };
                ?>
            </ul>
        </nav>

        <div class="container-cards">
            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="imagem">
                    <img src="./imagens/areia.png"/>
                </div>

                <div class="info">
                    <h1>Cimento CP II 50kg</h1>
                    <h2>R$ 39,90</h2>
                    <h2>Qtd. em estoque: <span>5</span></h2>

                    <a href="">
                        <div class="detalhes-btn">Ver detalhes</div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php 
    require_once('./partials/footer.php')
    ?>
</body>
</html>