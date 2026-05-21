<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex007/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?" class="code-btn">← Voltar ao exercício</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  - Manipulação de Strings</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex007.css">
</head>
<body>
<a href="../index.php" class="back">← Voltar</a>
<div class="container">

    <header>
        <h1>🔤 Manipulação de Strings</h1>
        <p>Funções nativas do PHP para trabalhar com texto</p>
    </header>

    <?php
    $tags_string = "tecnologia,programação,php,backend";
    $tags_array = explode(",", $tags_string);
    $nomes = ["Larissa", "João", "Beatriz"];
    $texto_final = implode(" e ", $nomes);
    $palavra1 = "Porto";
    $palavra2 = "Ação";
    $frase = "O suporte de Java é excelente. Eu estudo Java todo dia.";
    $nova_frase = str_replace("Java", "PHP", $frase);
    $cpf_formatado = "123.456.789-00";
    $cpf_limpo = preg_replace('/\D/', '', $cpf_formatado);
    ?>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-explode">🔀</div>
            <h2>explode() e implode()</h2>
        </div>
        <div class="card-content">
            <div class="code-block">
                <span class="comment">// explode — string → array</span><br>
                $tags = <span class="keyword">explode</span>(<span class="string">","</span>, <span class="string">"tecnologia,programação,php,backend"</span>);<br><br>
                <span class="comment">// implode — array → string</span><br>
                $nomes = [<span class="string">"Larissa"</span>, <span class="string">"João"</span>, <span class="string">"Beatriz"</span>];<br>
                $texto = <span class="keyword">implode</span>(<span class="string">" e "</span>, $nomes);
            </div>
            <div class="output-box">
                <div class="tag">▶ Resultado</div>
                <div class="output-flex">
                    <div class="result-item">
                        <div class="result-label">explode() — Array gerado</div>
                        <div class="result-value"><?php print_r($tags_array); ?></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">implode() — String gerada</div>
                        <div class="result-value">"<?= $texto_final ?>"</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-strlen">📏</div>
            <h2>strlen() vs mb_strlen()</h2>
        </div>
        <div class="card-content">
            <div class="code-block">
                $word = <span class="string">"<?= $palavra2 ?>"</span>;<br>
                <span class="keyword">echo</span> <span class="keyword">strlen</span>($word);&nbsp;&nbsp;&nbsp;&nbsp; <span class="comment">// bytes — <?= strlen($palavra2) ?></span><br>
                <span class="keyword">echo</span> <span class="keyword">mb_strlen</span>($word, <span class="string">"UTF-8"</span>); <span class="comment">// caracteres reais — <?= mb_strlen($palavra2, "UTF-8") ?></span>
            </div>
            <div class="output-box">
                <div class="tag">▶ Comparação</div>
                <div class="output-flex">
                    <div class="result-item">
                        <div class="result-label">strlen("<?= $palavra2 ?>")</div>
                        <div class="result-value"><span class="result-inline pink"><?= strlen($palavra2) ?> bytes</span></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">strlen("<?= $palavra1 ?>")</div>
                        <div class="result-value"><span class="result-inline blue"><?= strlen($palavra1) ?> bytes</span></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">mb_strlen("<?= $palavra2 ?>")</div>
                        <div class="result-value"><span class="result-inline green"><?= mb_strlen($palavra2, "UTF-8") ?> caracteres</span></div>
                    </div>
                </div>
                <div class="dica-box">
                    💡 <strong>Dica:</strong> Sempre use <code>mb_strlen()</code> para validar campos de formulário com acentos.
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-replace">🔄</div>
            <h2>str_replace() vs preg_replace()</h2>
        </div>
        <div class="card-content">
            <div class="code-block">
                <span class="comment">// str_replace — substituição literal</span><br>
                <span class="keyword">str_replace</span>(<span class="string">"Java"</span>, <span class="string">"PHP"</span>, <span class="string">"O suporte de Java..."</span>);<br><br>
                <span class="comment">// preg_replace — substituição por regex</span><br>
                <span class="keyword">preg_replace</span>(<span class="string">'/\D/'</span>, <span class="string">''</span>, <span class="string">"123.456.789-00"</span>);
            </div>
            <div class="output-box">
                <div class="tag">▶ Resultado</div>
                <div class="output-flex">
                    <div class="result-item">
                        <div class="result-label">str_replace("Java" → "PHP")</div>
                        <div class="result-value"><?= $nova_frase ?></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">preg_replace('/\D/', '', CPF)</div>
                        <div class="result-value"><?= $cpf_limpo ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        Feito com 💜 &bull; PHP &mdash; Ex007
    </footer>

</div>

    <a href="?codigo=1" class="code-btn">📄 Código</a>
</body>
</html>
