<?php
require_once 'init.php';

$sucesso = false;
$config  = isset($_SESSION['config']) ? $_SESSION['config'] : [
    'nome_loja'    => 'ConstruTech',
    'telefone'     => '(11) 3456-7890',
    'whatsapp'     => '(11) 93056-9806',
    'endereco'     => 'R. Santo André, 680 - Boa Vista, São Caetano do Sul - SP',
    'horario'      => 'Seg a Qui: 8h às 17h / Sex: 8h às 16h',
    'maps_url'     => 'https://maps.google.com',
    'seo_titulo'   => 'ConstruTech — Materiais de Construção',
    'seo_desc'     => 'Encontre tudo para sua construção com ótimos preços e qualidade!',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach (['nome_loja', 'telefone', 'whatsapp', 'endereco', 'horario', 'maps_url', 'seo_titulo', 'seo_desc'] as $campo) {
        $config[$campo] = trim($_POST[$campo] ?? '');
    }
    $_SESSION['config'] = $config;
    $sucesso = true;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações — ConstruTech</title>
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/configuracao.css">
</head>

<body>
    <?php require_once 'partials/header.php'; ?>
    <main>
        <div class="container-pagina">
            <div class="cfg-topo">
                <h1>Configurações</h1>
                <p>Gerencie as informações da loja</p>
            </div>

            <?php if ($sucesso): ?>
            <div class="alerta alerta-ok">
                <i class="bi bi-check-circle-fill"></i>
                Configurações salvas com sucesso!
            </div>
            <?php endif; ?>

            <form method="POST" novalidate>
                <div class="cfg-grid">
                    <section class="cfg-section">
                        <div class="cfg-section-topo">
                            <i class="bi bi-shop"></i>
                            <div>
                                <h2>Informações da Loja</h2>
                                <p>Dados de contato e localização</p>
                            </div>
                        </div>
                        <div class="cfg-campos">
                            <div class="campo-form">
                                <label>Nome da Loja</label>
                                <input type="text" name="nome_loja"
                                    value="<?php echo htmlspecialchars($config['nome_loja']); ?>">
                            </div>
                            <div class="form-row">
                                <div class="campo-form">
                                    <label>Telefone</label>
                                    <input type="tel" name="telefone"
                                        value="<?php echo htmlspecialchars($config['telefone']); ?>">
                                </div>
                                <div class="campo-form">
                                    <label>WhatsApp</label>
                                    <input type="tel" name="whatsapp"
                                        value="<?php echo htmlspecialchars($config['whatsapp']); ?>">
                                </div>
                            </div>
                            <div class="campo-form">
                                <label>Endereço</label>
                                <input type="text" name="endereco"
                                    value="<?php echo htmlspecialchars($config['endereco']); ?>">
                            </div>
                            <div class="campo-form">
                                <label>Horário de Funcionamento</label>
                                <input type="text" name="horario"
                                    value="<?php echo htmlspecialchars($config['horario']); ?>">
                            </div>
                            <div class="campo-form">
                                <label>Link do Google Maps</label>
                                <input type="url" name="maps_url"
                                    value="<?php echo htmlspecialchars($config['maps_url']); ?>">
                            </div>
                        </div>
                    </section>

                    <!-- SEO -->
                    <section class="cfg-section">
                        <div class="cfg-section-topo">
                            <i class="bi bi-search"></i>
                            <div>
                                <h2>SEO Básico</h2>
                                <p>Como o site aparece nos buscadores</p>
                            </div>
                        </div>
                        <div class="cfg-campos">
                            <div class="campo-form">
                                <label>Título do site</label>
                                <input type="text" name="seo_titulo"
                                    value="<?php echo htmlspecialchars($config['seo_titulo']); ?>">
                                <small>
                                    <?php echo strlen($config['seo_titulo']); ?>/60 caracteres
                                </small>
                            </div>
                            <div class="campo-form">
                                <label>Descrição do site</label>
                                <textarea name="seo_desc"
                                    rows="3"><?php echo htmlspecialchars($config['seo_desc']); ?></textarea>
                                <small>
                                    <?php echo strlen($config['seo_desc']); ?>/160 caracteres
                                </small>
                            </div>
                            <div class="seo-preview">
                                <p class="seo-preview-titulo">
                                    <?php echo htmlspecialchars($config['seo_titulo']); ?>
                                </p>
                                <p class="seo-preview-url">construtech.com.br</p>
                                <p class="seo-preview-desc">
                                    <?php echo htmlspecialchars(substr($config['seo_desc'], 0, 120)); ?>...
                                </p>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="cfg-footer">
                    <button type="submit" class="btn-primary">
                        <i class="bi bi-floppy-fill"></i> Salvar configurações
                    </button>
                    <a href="index.php" class="btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
    <?php require_once 'partials/footer.php'; ?>
</body>

</html>