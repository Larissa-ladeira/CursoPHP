<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex002/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
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

    </div>
<a href="?codigo=1" class="code-btn">?? C�digo</a>
</body>
</html>
