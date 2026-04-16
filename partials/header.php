<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constru Tech</title>
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
</head>

<body>
    <header class="topo">
        <div class="topo-menu">
            <div class="topo-esquerdo">
                <a href="index.php">
                    <img src="imagens/logo2.png" class="logo" alt="Logo">
                </a>
            </div>
             <div class="topo-direito">
                <a href="cadastro_produtos.php" class="">Adicionar Produto</a>
            </div>

            <a href="" onclick="exibir()" class="sidebar"><img src="./imagens/icon_sidebar.png"/></a>
        </div>

         <div class="navegacao" id="navegacao" style="display: none;">
        <div class="container-voltar">
            <a class="voltar" href="" onclick="location.reload()"> <i class="bi bi-escape"></i> </a>
        </div>
        <div class="perfil">
            <i class="bi bi-person-circle"></i>

            <h1>Nome Sobrenome</h1>
        </div>

        <div class="container-elementos">
            <ul>
                <li><a href="index.php"><i class="bi bi-house-fill"></i> &nbsp; Início</a></li>
                <li><a href="tabela-tuch.php"><i class="bi bi-stack"></i> &nbsp; Inventário</a></li>
                <li><a href="dashboard.php"><i class="bi bi-building-fill-gear"></i> &nbsp; Dashboard</a></li>
                <li><a href=""><i class="bi bi-sliders"></i> &nbsp; Configurações</a></li>
            </ul>
        </div>

        <div class="emergencia">
            <a href=""><i class="bi bi-telephone-fill"></i></a>
        </div>
    </div>

    <div class="preto" id="preto" style="display: none;"></div>

    <script>
        function exibir() {
            event.preventDefault();
            document.getElementById("navegacao").style.display = "block"
            document.getElementById("preto").style.display = "block"
            document.body.style.overflow = "hidden";
        }
    </script>
    </header>
</body>

</html>