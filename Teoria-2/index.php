<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex003/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?" class="code-btn">← Voltar ao exercício</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  - Estruturas de Controle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex003.css">
</head>
<body>
<a href="../index.php" class="back">← Voltar</a>
<div class="container">

    <header>
        <h1>⚡ PHP Estruturas de Controle Documentação</h1>
        <p>Estruturas de controle, arrays e POO</p>
    </header>

    <?php
    // ── Variáveis usadas ──
    $nome = 'Canal TI';
    $frutas = ['Banana', 'Maçã', 'Laranja'];
    $frutasAssoc = ['Banana' => 'B', 'Maçã' => 'M', 'Laranja' => 'L'];

    class Pessoa {
        public $nome;
        public $idade;
        public function saudacao() {
            return "Olá, meu nome é {$this->nome} e eu tenho {$this->idade} anos";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = 'Larissa';
    $pessoa->idade = 25;
    ?>

    <!-- ──────── IF / ELSE ──────── -->
    <div class="card">
        <div class="card-header">
            <div class="icon icon-if">🔀</div>
            <h2>if / else if / else</h2>
        </div>
        <div class="card-content">
            <p class="explica">As estruturas condicionais <code>if</code>, <code>else if</code> e <code>else</code> permitem executar diferentes blocos de código conforme uma condição booleana. São a base da lógica de tomada de decisão em qualquer programa.</p>
            <div class="code-block">
                <span class="keyword">if</span> ($nome == <span class="string">'Canal TI'</span>) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">'...'</span>;<br>
                } <span class="keyword">else if</span> ($nome == <span class="string">'Canal TI 2'</span>) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">'...'</span>;<br>
                } <span class="keyword">else</span> {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">'...'</span>;<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ Resultado</div>
                <?php
                if ($nome == 'Canal TI') {
                    echo '<span class="badge badge-if">True</span> O seu nome é <strong>Canal TI</strong>';
                } else if ($nome == 'Canal TI 2') {
                    echo '<span class="badge badge-if">True</span> O seu nome é <strong>Canal TI 2</strong>';
                } else {
                    echo 'O seu nome não é nem Canal TI e nem Canal TI 2';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- ──────── SWITCH ──────── -->
    <div class="card">
        <div class="card-header">
            <div class="icon icon-switch">📋</div>
            <h2>switch / case</h2>
        </div>
        <div class="card-content">
            <p class="explica">A estrutura <code>switch</code> compara uma expressão contra múltiplos valores (<code>case</code>). É uma alternativa mais limpa ao <code>if</code> encadeado quando há muitas comparações com um mesmo valor.</p>
            <div class="code-block">
                <span class="keyword">switch</span> ($nome) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> <span class="string">'Canal TI'</span>:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">'...'</span>; <span class="keyword">break</span>;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> <span class="string">'Canal TI 2'</span>:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">'...'</span>; <span class="keyword">break</span>;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">default</span>:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">'...'</span>; <span class="keyword">break</span>;<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ Resultado</div>
                <?php
                switch ($nome) {
                    case 'Canal TI':
                        echo '<span class="badge badge-switch">Match</span> O seu nome é <strong>Canal TI</strong>';
                        break;
                    case 'Canal TI 2':
                        echo '<span class="badge badge-switch">Match</span> O seu nome é <strong>Canal TI 2</strong>';
                        break;
                    default:
                        echo 'Nenhum case correspondeu';
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <!-- ──────── LAÇOS ──────── -->
    <div class="card">
        <div class="card-header">
            <div class="icon icon-loop">🔄</div>
            <h2>Laços de repetição</h2>
        </div>
        <div class="card-content">
            <p class="explica">Os laços de repetição (<code>for</code>, <code>while</code>) executam um bloco de código múltiplas vezes. O <code>for</code> é ideal quando se sabe o número de iterações; o <code>while</code>, quando a repetição depende de uma condição.</p>
            <!-- for -->
            <div class="code-block">
                <span class="comment">// for</span><br>
                <span class="keyword">for</span> ($i = <span class="number">0</span>; $i &lt; <span class="number">10</span>; $i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> $i;<br>
                }<br><br>
                <span class="comment">// while</span><br>
                $i = <span class="number">0</span>;<br>
                <span class="keyword">while</span> ($i &lt; <span class="number">10</span>) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> $i; $i++;<br>
                }
            </div>
            <div class="output-box output-box-flex">
                <div class="num-group">
                    <div class="tag">▶ for (0-9)</div>
                    <div class="num-grid">
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <span class="num-badge num-badge-blue"><?= $i ?></span>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="num-group">
                    <div class="tag">▶ while (0-9)</div>
                    <div class="num-grid">
                        <?php $i = 0; while ($i < 10): ?>
                            <span class="num-badge num-badge-green"><?= $i ?></span>
                        <?php $i++; endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ──────── ARRAYS ──────── -->
    <div class="card">
        <div class="card-header">
            <div class="icon icon-array">📦</div>
            <h2>Arrays</h2>
        </div>
        <div class="card-content">
            <p class="explica">Arrays armazenam múltiplos valores em uma única variável. O <code>foreach</code> é a estrutura mais usada para percorrer arrays, iterando sobre cada elemento sem necessidade de contador manual.</p>
            <div class="code-block">
                <span class="comment">// Array simples</span><br>
                $frutas = [<span class="string">'Banana'</span>, <span class="string">'Maçã'</span>, <span class="string">'Laranja'</span>];<br><br>
                <span class="comment">// foreach</span><br>
                <span class="keyword">foreach</span> ($frutas <span class="keyword">as</span> $fruta) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> $fruta;<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ itens do array</div>
                <div class="fruit-list">
                    <?php foreach ($frutas as $f): ?>
                        <span class="fruit-item">🍏 <?= $f ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ──────── ARRAYS ASSOCIATIVOS ──────── -->
    <div class="card">
        <div class="card-header">
            <div class="icon icon-assoc">🏷️</div>
            <h2>Arrays Associativos</h2>
        </div>
        <div class="card-content">
            <p class="explica">Diferente dos arrays indexados, os arrays associativos usam chaves nomeadas (strings) em vez de números. São perfeitos para representar dados estruturados como registros de banco de dados.</p>
            <div class="code-block">
                $frutas = [<span class="string">'Banana'</span> => <span class="string">'B'</span>, <span class="string">'Maçã'</span> => <span class="string">'M'</span>, <span class="string">'Laranja'</span> => <span class="string">'L'</span>];<br>
                <span class="keyword">foreach</span> ($frutas <span class="keyword">as</span> $fruta => $categoria) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">"$fruta da categoria $categoria"</span>;<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ pares chave → valor</div>
                <table class="array-table">
                    <thead><tr><th>Fruta</th><th>Categoria</th></tr></thead>
                    <tbody>
                        <?php foreach ($frutasAssoc as $fruta => $cat): ?>
                        <tr>
                            <td class="fruta-cell">🍉 <?= $fruta ?></td>
                            <td><span class="cat-badge"><?= $cat ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ──────── CLASSES ──────── -->
    <div class="card">
        <div class="card-header">
            <div class="icon icon-class">🧩</div>
            <h2>Classes e Objetos</h2>
        </div>
        <div class="card-content">
            <p class="explica">POO permite organizar o código em classes (moldes) que definem propriedades e métodos. Objetos são instâncias concretas dessas classes, cada um com seus próprios valores.</p>
            <div class="code-block">
                <span class="keyword">class</span> <span class="class-name">Pessoa</span> {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> $nome;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public</span> $idade;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">public function</span> saudacao() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> <span class="string">"Olá, meu nome é ..."</span>;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }<br><br>
                $p = <span class="keyword">new</span> Pessoa();<br>
                $p->nome = <span class="string">'Larissa'</span>;<br>
                $p->idade = <span class="number">25</span>;<br>
                <span class="keyword">echo</span> $p->saudacao();
            </div>
            <div class="output-box">
                <div class="tag">▶ Objeto instanciado</div>
                <div class="person-flex">
                    <div class="person-avatar">L</div>
                    <div class="person-info">
                        <div class="person-name"><?= $pessoa->nome ?></div>
                        <div class="person-age"><?= $pessoa->idade ?> anos</div>
                        <div class="person-speech">💬 <?= $pessoa->saudacao() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ──────── EXERCÍCIOS ──────── -->
    <div class="card">
        <div class="card-header">
            <div class="icon icon-switch">📞</div>
            <h2>Exercício: Tradutor de DDD</h2>
        </div>
        <div class="card-content">
            <p class="explica">Exercício prático usando <code>switch/case</code> para traduzir códigos DDD em estados brasileiros. Digite um DDD e veja o resultado aplicando o que foi aprendido.</p>
            <div class="code-block">
                <span class="comment">// switch / case — Tradutor de DDD</span><br>
                <span class="keyword">switch</span> ($ddd) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> <span class="number">11</span>: <span class="keyword">echo</span> <span class="string">'São Paulo'</span>; <span class="keyword">break</span>;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> <span class="number">21</span>: <span class="keyword">echo</span> <span class="string">'Rio de Janeiro'</span>; <span class="keyword">break</span>;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> <span class="number">31</span>: <span class="keyword">echo</span> <span class="string">'Minas Gerais'</span>; <span class="keyword">break</span>;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">default</span>: <span class="keyword">echo</span> <span class="string">'DDD não cadastrado'</span>;<br>
                }
            </div>
            <div class="output-box">
                <div class="tag">▶ Teste você mesmo</div>
                <form class="ex-form" action="" method="post">
                    <input class="ex-input" type="number" name="ddd" placeholder="Ex: 11, 21, 31..." required>
                    <button class="ex-btn" type="submit">Traduzir</button>
                </form>
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ddd'])): ?>
                    <?php
                    $ddd = (int) $_POST['ddd'];
                    switch ($ddd) {
                        case 11:
                            $estado = 'São Paulo';
                            $classe = 'success';
                            break;
                        case 21:
                            $estado = 'Rio de Janeiro';
                            $classe = 'success';
                            break;
                        case 31:
                            $estado = 'Minas Gerais';
                            $classe = 'success';
                            break;
                        default:
                            $estado = 'DDD não cadastrado.';
                            $classe = 'error';
                            break;
                    }
                    ?>
                    <div class="ex-result <?= $classe ?>">
                        <?php if ($classe === 'success'): ?>
                            ✅ DDD <?= $ddd ?> → <strong><?= $estado ?></strong>
                        <?php else: ?>
                            ❌ <?= $estado ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <footer>
        Feito com 💜 &bull; PHP &mdash; Ex003
    </footer>


</div>

    <a href="?codigo=1" class="code-btn">📄 Código</a>
</body>
</html>
