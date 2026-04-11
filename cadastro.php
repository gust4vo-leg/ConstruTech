<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se - Constru Tech</title>
    <link rel="stylesheet" href="css/cadastrar.css">
    <link rel="icon" href="imagens/logo.png"> 
</head>
<body>
    <main>
        <sectio>
            <div class="card">
                <h4>Cadastrar-se</h4>
                <form action="#" method="POST">
                    <div class="input-box">
                        <input type="text" name="nome" required>
                        <label>Nome Completo</label>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <input type="number" name="cpf" required>
                        <label>CPF</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="senha" required>
                        <label> Senha</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="confirmar" required>
                        <label>Confirmar Senha</label>
                    </div>
                    <button>Cadastrar-se</button>

                    <p>Já tem conta? <a href="login.php">Entrar</a></p>
                </form>
            </div>
        </sectio>
    </main>
</body>
</html>