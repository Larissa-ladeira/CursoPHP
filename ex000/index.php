<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex000/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
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
    
    <a href="?codigo=1" class="code-btn">📄 Código</a>
</div>
</body>
</html>
