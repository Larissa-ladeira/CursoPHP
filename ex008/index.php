<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex011/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?" class="code-btn">← Voltar ao exercício</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios | Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex011.css">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="card">
        <h1>🎲 <span>Números Aleatórios</span></h1>
        <p class="sub">Número aleatório gerado entre 0 e 100</p>

        <div class="number-box">
            <?php
            $aleatorio = rand(0, 100);
            ?>
            <div class="number-display"><?= $aleatorio ?></div>
            <div class="number-label">Valor gerado</div>
        </div>

        <form method="get">
            <button type="submit">🔄 Gerar Novo Número</button>
        </form>
    </div>

    <a href="?codigo=1" class="code-btn">📄 Código</a>
</body>
</html>