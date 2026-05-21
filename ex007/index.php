<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex007/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?" class="code-btn">← Voltar ao exercício</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor e Antecessor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex007.css">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="container">
        <header>
            <h1>🔢 Sucessor e Antecessor</h1>
            <p>Digite um número para descobrir seu antecessor e sucessor</p>
        </header>

        <div class="card">
            <div class="card-header">
                <div class="icon icon-explode">🔢</div>
                <h2>Informe um número</h2>
            </div>
            <div class="card-content">
                <form action="" method="POST">
                    <div class="output-flex">
                        <div style="flex:1;min-width:200px">
                            <div class="tag">Número</div>
                            <input type="number" id="numero" name="numero" placeholder="Ex: 10" required
                                   style="width:100%;padding:12px 16px;border-radius:10px;border:1px solid rgba(255,255,255,0.08);background:rgba(0,0,0,0.3);color:#fff;font-size:0.95rem;font-family:inherit;outline:none">
                        </div>
                    </div>
                    <button type="submit" style="padding:12px 24px;border-radius:10px;border:none;background:linear-gradient(135deg,#f093fb,#f5576c);color:#fff;font-size:0.95rem;font-weight:700;font-family:inherit;cursor:pointer;transition:transform 0.2s">Descobrir</button>
                </form>
            </div>
        </div>

        <?php if (isset($_POST['numero']) && is_numeric($_POST['numero'])): 
            $valor = (int) $_POST['numero'];
        ?>
        <div class="card">
            <div class="card-header">
                <div class="icon icon-strlen">📊</div>
                <h2>Resultado</h2>
            </div>
            <div class="card-content">
                <div class="output-box">
                    <div class="tag">Número escolhido</div>
                    <div style="font-size:2rem;font-weight:800;color:#fff;font-family:'JetBrains Mono','Fira Code',monospace"><?= $valor ?></div>
                </div>
                <div class="output-flex">
                    <div class="result-item">
                        <div class="result-label">Antecessor</div>
                        <div class="result-value" style="color:#f093fb;font-size:1.8rem"><?= $valor - 1 ?></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">Sucessor</div>
                        <div class="result-value" style="color:#43e97b;font-size:1.8rem"><?= $valor + 1 ?></div>
                    </div>
                </div>
                <form action="" method="get" style="margin-top:4px">
                    <button type="submit" style="padding:12px 24px;border-radius:10px;border:none;background:linear-gradient(135deg,#4facfe,#00f2fe);color:#fff;font-size:0.9rem;font-weight:700;font-family:inherit;cursor:pointer;transition:transform 0.2s">🔄 Novo Número</button>
                </form>
            </div>
        </div>
        <?php endif; ?>

        <footer>© Curso PHP</footer>
    </div>

    <a href="?codigo=1" class="code-btn">📄 Código</a>
</body>
</html>
