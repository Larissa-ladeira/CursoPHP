<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex001/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor | Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex001.css">
</head>
<body>
    <div class="container">
        <a href="../index.php" class="back">← Voltar</a>
        <header>
            <h1>🖥️ Dados do Servidor</h1>
            <p>Informações sobre o ambiente PHP e servidor web</p>
        </header>
        <div class="info-grid">
            <div class="info-item">
                <div class="label">Versão do PHP</div>
                <div class="value"><?= phpversion() ?></div>
            </div>
            <div class="info-item">
                <div class="label">Sistema Operacional</div>
                <div class="value"><?= PHP_OS ?></div>
            </div>
            <div class="info-item">
                <div class="label">Arquitetura</div>
                <div class="value"><?= php_uname('m') ?></div>
            </div>
            <div class="info-item">
                <div class="label">Servidor Web</div>
                <div class="value"><?= $_SERVER['SERVER_SOFTWARE'] ?? 'N/A' ?></div>
            </div>
            <div class="info-item">
                <div class="label">Nome do Servidor</div>
                <div class="value"><?= $_SERVER['SERVER_NAME'] ?? 'N/A' ?></div>
            </div>
            <div class="info-item">
                <div class="label">Porta do Servidor</div>
                <div class="value"><?= $_SERVER['SERVER_PORT'] ?? 'N/A' ?></div>
            </div>
            <div class="info-item">
                <div class="label">Endereço IP</div>
                <div class="value"><?= $_SERVER['SERVER_ADDR'] ?? 'N/A' ?></div>
            </div>
            <div class="info-item">
                <div class="label">Método da Requisição</div>
                <div class="value"><?= $_SERVER['REQUEST_METHOD'] ?? 'N/A' ?></div>
            </div>
            <div class="info-item">
                <div class="label">Protocolo</div>
                <div class="value"><?= $_SERVER['SERVER_PROTOCOL'] ?? 'N/A' ?></div>
            </div>
            <div class="info-item">
                <div class="label">Document Root</div>
                <div class="value"><code><?= $_SERVER['DOCUMENT_ROOT'] ?? 'N/A' ?></code></div>
            </div>
            <div class="info-item">
                <div class="label">Script Atual</div>
                <div class="value"><code><?= $_SERVER['SCRIPT_FILENAME'] ?? 'N/A' ?></code></div>
            </div>
            <div class="info-item">
                <div class="label">Timezone</div>
                <div class="value"><?= date_default_timezone_get() ?></div>
            </div>
        </div>
    
    <a href="?codigo=1" class="code-btn">📄 Código</a>
</div>
</body>
</html>
