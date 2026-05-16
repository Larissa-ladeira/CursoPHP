<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><style>*{margin:0;padding:0;box-sizing:border-box}body{background:#0b0a1a;padding:20px;font-family:'Inter',sans-serif}.top{display:flex;align-items:center;gap:12px;margin-bottom:20px;flex-wrap:wrap}.top a{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border-radius:10px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);color:#9999bb;text-decoration:none;font-size:.8rem;transition:all .2s}.top a:hover{background:rgba(255,255,255,0.08);color:#fff}.top span{color:#555577;font-size:.75rem}pre{margin:0}.wrap{background:rgba(0,0,0,0.5);border-radius:12px;padding:20px;overflow-x:auto;border:1px solid rgba(255,255,255,0.04)}.wrap code{font-family:'JetBrains Mono','Fira Code',monospace;font-size:.82rem;line-height:1.7}@media(max-width:600px){body{padding:12px}.wrap{padding:12px}.wrap code{font-size:.72rem}}</style></head><body><div class="top"><a href="?">← Voltar</a><span>ex001/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
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
    </div>
</body>
</html>
