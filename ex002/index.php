<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><style>*{margin:0;padding:0;box-sizing:border-box}body{background:#0b0a1a;padding:20px;font-family:'Inter',sans-serif}.top{display:flex;align-items:center;gap:12px;margin-bottom:20px;flex-wrap:wrap}.top a{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border-radius:10px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);color:#9999bb;text-decoration:none;font-size:.8rem;transition:all .2s}.top a:hover{background:rgba(255,255,255,0.08);color:#fff}.top span{color:#555577;font-size:.75rem}pre{margin:0}.wrap{background:rgba(0,0,0,0.5);border-radius:12px;padding:20px;overflow-x:auto;border:1px solid rgba(255,255,255,0.04)}.wrap code{font-family:'JetBrains Mono','Fira Code',monospace;font-size:.82rem;line-height:1.7}@media(max-width:600px){body{padding:12px}.wrap{padding:12px}.wrap code{font-size:.72rem}}</style></head><body><div class="top"><a href="?">← Voltar</a><span>ex002/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradutor de DDD | Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex002.css">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="card">
        <h1>📞 <span>Tradutor de DDD</span></h1>
        <p class="sub">Digite um DDD e descubra o estado</p>

        <div class="code-hint">
            <span class="cmt">// switch / case</span><br>
            <span class="kw">switch</span> ($ddd) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="kw">case</span> <span class="num">11</span>:&nbsp;&nbsp;<span class="kw">echo</span> <span class="str">'São Paulo'</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kw">break</span>;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="kw">case</span> <span class="num">21</span>:&nbsp;&nbsp;<span class="kw">echo</span> <span class="str">'Rio de Janeiro'</span>;&nbsp;<span class="kw">break</span>;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="kw">case</span> <span class="num">31</span>:&nbsp;&nbsp;<span class="kw">echo</span> <span class="str">'Minas Gerais'</span>;&nbsp;&nbsp;&nbsp;<span class="kw">break</span>;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="kw">default</span>: <span class="kw">echo</span> <span class="str">'DDD não cadastrado'</span>;<br>
            }
        </div>

        <form action="" method="post">
            <input type="number" name="ddd" placeholder="Ex: 11, 21, 31..." required>
            <button type="submit">Traduzir</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ddd'])) {
            $ddd = (int) $_POST['ddd'];
            $tabela = [
                11 => 'São Paulo',
                19 => 'Campinas',
                21 => 'Rio de Janeiro',
                27 => 'Vitória',
                31 => 'Belo Horizonte',
                41 => 'Curitiba',
                51 => 'Porto Alegre',
                91 => 'Salvador',
            ];

            if (isset($tabela[$ddd])) {
                echo '<div class="result found">📌 DDD ' . $ddd . ' → <strong>' . $tabela[$ddd] . '</strong></div>';
            } else {
                echo '<div class="result not-found">❌ DDD ' . $ddd . ' não encontrado</div>';
            }
        }
        ?>

        <div class="ddd-list">
            <div class="ddd-item"><strong>11</strong>São Paulo</div>
            <div class="ddd-item"><strong>19</strong>Campinas</div>
            <div class="ddd-item"><strong>21</strong>Rio de Janeiro</div>
            <div class="ddd-item"><strong>27</strong>Vitória</div>
            <div class="ddd-item"><strong>31</strong>Belo Horizonte</div>
            <div class="ddd-item"><strong>41</strong>Curitiba</div>
            <div class="ddd-item"><strong>51</strong>Porto Alegre</div>
            <div class="ddd-item"><strong>91</strong>Salvador</div>
        </div>
    </div>
</body>
</html>
