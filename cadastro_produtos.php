<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="./css/cadastro_produtos.css">
    <link rel="stylesheet" href="css/header_footer.css">
</head>
<body>
    <?php 
    require_once('./partials/header.php')
    ?>

    <main>
        <div class="box">
            <div class="fundo-branco">
                <img src="./imagens/icone_cadastro.png">
                <label><i>Adicione produtos com facilidade!</i></label>
            </div>

            <div class="div-form">
                <h1>Cadastro de Produtos</h1>

                <form action="#" method="POST">
                    <input type="text" class="nome" placeholder="*Nome Completo" name="nome">
                    <input type="text" class="preco-qtd" placeholder="*Preço" name="preco">
                    <input type="text" class="preco-qtd" placeholder="*Qtd. em estoque" name="quantidade"> <br>

                    <select name="categoria">
                        <option value="Selecione categoria">Selecione a categoria</option>
                        <option value="Bruto">Bruto</option>
                        <option value="Ferramentas">Ferramentas</option>
                        <option value="Acabamento">Acabamento</option>
                    </select>

                    <input type="text" class="url" placeholder="*URL da imagem"
                    name="imagem">
                    <textarea name="descricao" placeholder="Descrição do produto"></textarea> <br>

                    <button type="submit">Enviar</button>
                    <button type="reset">Limpar</button>
                    
                </form>
            </div>
        </div>
    </main>
    <?php 
    require_once('./partials/footer.php')
    ?>
</body>
</html>