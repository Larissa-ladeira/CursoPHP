<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><style>*{margin:0;padding:0;box-sizing:border-box}body{background:#0b0a1a;padding:20px;font-family:'Inter',sans-serif}.top{display:flex;align-items:center;gap:12px;margin-bottom:20px;flex-wrap:wrap}.top a{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border-radius:10px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);color:#9999bb;text-decoration:none;font-size:.8rem;transition:all .2s}.top a:hover{background:rgba(255,255,255,0.08);color:#fff}.top span{color:#555577;font-size:.75rem}pre{margin:0}.wrap{background:rgba(0,0,0,0.5);border-radius:12px;padding:20px;overflow-x:auto;border:1px solid rgba(255,255,255,0.04)}.wrap code{font-family:'JetBrains Mono','Fira Code',monospace;font-size:.82rem;line-height:1.7}@media(max-width:600px){body{padding:12px}.wrap{padding:12px}.wrap code{font-size:.72rem}}</style></head><body><div class="top"><a href="?">← Voltar</a><span>ex000/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World | Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex000.css">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="card">
        <span class="globe">🌎</span>
        <h1>
            <?php echo "Olá, Mundo \u{1F30E}!"; ?>
        </h1>
        <p>Vamos tentar nos livrar da maldição!</p>
        <div class="code-hint">&lt;?php echo "Olá, Mundo 🌎!"; ?&gt;</div>
        <div class="tag">Primeiro passo</div>
    </div>
</body>
</html>
