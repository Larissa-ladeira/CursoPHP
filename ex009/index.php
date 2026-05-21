<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex012/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?" class="code-btn">← Voltar ao exercício</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Estudos | Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex012.css">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="container">

        <header>
            <h1>🗺️ Próximos Passos</h1>
            <p>O que estudar depois dos fundamentos do PHP</p>
        </header>

        <div class="roadmap">

            <div class="card">
                <span class="step">1</span>
                <div class="card-header">
                    <div class="icon icon-func">🔧</div>
                    <h2>Funções Avançadas</h2>
                </div>
                <div class="card-content">
                    <p>Domine tipos de declaração (<em>typed parameters</em>), parâmetros opcionais, <em>spread operator</em> (<code>...</code>), funções anônimas (closures) e <em>arrow functions</em> (<code>fn</code>).</p>
                    <div class="code-block">
                        <span class="keyword">function</span> somar(<span class="keyword">int</span> $a, <span class="keyword">int</span> $b): <span class="keyword">int</span> {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> $a + $b;<br>
                        }<br><br>
                        $dobrar = <span class="keyword">fn</span>($n) => $n * <span class="number">2</span>;
                    </div>
                    <div class="tag-list">
                        <span class="highlight">typed parameters</span>
                        <span>closures</span>
                        <span>arrow functions</span>
                        <span>spread operator</span>
                        <span>recursão</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">2</span>
                <div class="card-header">
                    <div class="icon icon-array">📊</div>
                    <h2>Funções de Array</h2>
                </div>
                <div class="card-content">
                    <p>O PHP possui dezenas de funções nativas para manipular arrays. Aprenda <code>array_map</code>, <code>array_filter</code>, <code>array_reduce</code>, <code>usort</code>, <code>array_merge</code>, <code>array_diff</code> e muito mais.</p>
                    <div class="code-block">
                        $numeros = [<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>];<br>
                        $pares = <span class="keyword">array_filter</span>($numeros, <span class="keyword">fn</span>($n) => $n % <span class="number">2</span> === <span class="number">0</span>);<br>
                        $quad = <span class="keyword">array_map</span>(<span class="keyword">fn</span>($n) => $n ** <span class="number">2</span>, $numeros);
                    </div>
                    <div class="tag-list">
                        <span class="highlight">array_map</span>
                        <span class="highlight">array_filter</span>
                        <span>array_reduce</span>
                        <span>usort</span>
                        <span>array_merge</span>
                        <span>array_diff</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">3</span>
                <div class="card-header">
                    <div class="icon icon-file">📁</div>
                    <h2>Manipulação de Arquivos</h2>
                </div>
                <div class="card-content">
                    <p>Trabalhe com o sistema de arquivos: leia e escreva arquivos com <code>file_get_contents</code>, <code>file_put_contents</code>, <code>fopen</code>/<code>fwrite</code>/<code>fclose</code>, e gerencie diretórios com <code>mkdir</code>, <code>scandir</code>, <code>unlink</code>.</p>
                    <div class="code-block">
                        $conteudo = <span class="keyword">file_get_contents</span>(<span class="string">"dados.txt"</span>);<br>
                        <span class="keyword">file_put_contents</span>(<span class="string">"log.txt"</span>, <span class="string">"Novo registro\n"</span>, FILE_APPEND);
                    </div>
                    <div class="tag-list">
                        <span class="highlight">file_get_contents</span>
                        <span class="highlight">file_put_contents</span>
                        <span>fopen</span>
                        <span>fgetcsv</span>
                        <span>scandir</span>
                        <span>JSON</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">4</span>
                <div class="card-header">
                    <div class="icon icon-error">⚠️</div>
                    <h2>Tratamento de Erros</h2>
                </div>
                <div class="card-content">
                    <p>Aprenda a lidar com exceções usando <code>try</code>/<code>catch</code>/<code>finally</code>, crie suas próprias exceções e entenda a diferença entre erro e exceção no PHP.</p>
                    <div class="code-block">
                        <span class="keyword">try</span> {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;$resultado = <span class="number">10</span> / $divisor;<br>
                        } <span class="keyword">catch</span> (DivisionByZeroError $e) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">"Erro: "</span> . $e->getMessage();<br>
                        }
                    </div>
                    <div class="tag-list">
                        <span class="highlight">try/catch</span>
                        <span>throw</span>
                        <span>finally</span>
                        <span>custom exceptions</span>
                        <span>error_log</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">5</span>
                <div class="card-header">
                    <div class="icon icon-date">📅</div>
                    <h2>Datas e Sessões</h2>
                </div>
                <div class="card-content">
                    <p>Manipule datas com <code>DateTime</code>, <code>DateInterval</code> e <code>DateTimeZone</code>. E aprofunde-se em sessões: configuração de <code>session</code>, cookies seguros, flash messages e login persistente.</p>
                    <div class="code-block">
                        $agora = <span class="keyword">new</span> DateTime(<span class="string">"now"</span>, <span class="keyword">new</span> DateTimeZone(<span class="string">"America/Sao_Paulo"</span>));<br>
                        <span class="keyword">echo</span> $agora->format(<span class="string">"d/m/Y H:i:s"</span>);
                    </div>
                    <div class="tag-list">
                        <span class="highlight">DateTime</span>
                        <span>DateInterval</span>
                        <span>session security</span>
                        <span>flash messages</span>
                        <span>cookies</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">6</span>
                <div class="card-header">
                    <div class="icon icon-security">🛡️</div>
                    <h2>Segurança Web</h2>
                </div>
                <div class="card-content">
                    <p>Proteja sua aplicação contra ataques comuns: <strong>SQL Injection</strong> (prepared statements), <strong>XSS</strong> (htmlspecialchars), <strong>CSRF</strong> (tokens), validação de uploads e hash de senhas com <code>password_hash</code>/<code>password_verify</code>.</p>
                    <div class="code-block">
                        $hash = <span class="keyword">password_hash</span>(<span class="string">"minha_senha"</span>, PASSWORD_BCRYPT);<br>
                        <span class="keyword">if</span> (<span class="keyword">password_verify</span>(<span class="string">"minha_senha"</span>, $hash)) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// login válido</span><br>
                        }
                    </div>
                    <div class="tag-list">
                        <span class="highlight">SQL Injection</span>
                        <span class="highlight">XSS</span>
                        <span>CSRF</span>
                        <span>password_hash</span>
                        <span>validação</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">7</span>
                <div class="card-header">
                    <div class="icon icon-db">🗄️</div>
                    <h2>Banco de Dados com PDO</h2>
                </div>
                <div class="card-content">
                    <p>Conecte-se a bancos de dados usando a extensão <strong>PDO</strong>. Aprenda a fazer consultas preparadas (<em>prepared statements</em>) para evitar SQL Injection, transações, e CRUD completo com MySQL.</p>
                    <div class="code-block">
                        $pdo = <span class="keyword">new</span> PDO(<span class="string">"mysql:host=localhost;dbname=teste"</span>, $user, $pass);<br>
                        $stmt = $pdo->prepare(<span class="string">"SELECT * FROM usuarios WHERE email = ?"</span>);<br>
                        $stmt->execute([$email]);<br>
                        $usuario = $stmt->fetch();
                    </div>
                    <div class="tag-list">
                        <span class="highlight">PDO</span>
                        <span class="highlight">prepared statements</span>
                        <span>MySQL</span>
                        <span>transactions</span>
                        <span>CRUD</span>
                        <span>JOINs</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">8</span>
                <div class="card-header">
                    <div class="icon icon-composer">📦</div>
                    <h2>Composer & Autoload</h2>
                </div>
                <div class="card-content">
                    <p>O <strong>Composer</strong> é o gerenciador de dependências do PHP. Aprenda a criar um <code>composer.json</code>, usar o autoload PSR-4 com <code>namespace</code>, e instalar pacotes da comunidade.</p>
                    <div class="code-block">
                        <span class="comment">// composer.json</span><br>
                        {<br>
                        &nbsp;&nbsp;<span class="string">"autoload"</span>: {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="string">"psr-4"</span>: { <span class="string">"App\\"</span>: <span class="string">"src/"</span> }<br>
                        &nbsp;&nbsp;}<br>
                        }
                    </div>
                    <div class="tag-list">
                        <span class="highlight">Composer</span>
                        <span class="highlight">PSR-4</span>
                        <span>namespace</span>
                        <span>autoload</span>
                        <span>packagist</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">9</span>
                <div class="card-header">
                    <div class="icon icon-mvc">🏗️</div>
                    <h2>Arquitetura MVC</h2>
                </div>
                <div class="card-content">
                    <p>Entenda o padrão <strong>Model-View-Controller</strong>, a base dos principais frameworks PHP. Separe a lógica de negócios (Model), da apresentação (View) e do controle (Controller).</p>
                    <div class="tag-list">
                        <span class="highlight">MVC</span>
                        <span>rotas</span>
                        <span>controllers</span>
                        <span>models</span>
                        <span>views</span>
                        <span>Laravel</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <span class="step">10</span>
                <div class="card-header">
                    <div class="icon icon-api">🌐</div>
                    <h2>APIs RESTful</h2>
                </div>
                <div class="card-content">
                    <p>Crie APIs REST com PHP puro ou com frameworks. Aprenda sobre os métodos HTTP (GET, POST, PUT, DELETE), <em>status codes</em>, autenticação com JWT, versionamento e documentação com OpenAPI.</p>
                    <div class="code-block">
                        header(<span class="string">"Content-Type: application/json"</span>);<br>
                        <span class="keyword">echo</span> <span class="keyword">json_encode</span>([<span class="string">"status"</span> => <span class="string">"ok"</span>, <span class="string">"data"</span> => $dados]);
                    </div>
                    <div class="tag-list">
                        <span class="highlight">REST</span>
                        <span>JSON</span>
                        <span>JWT</span>
                        <span>status codes</span>
                        <span>Postman</span>
                        <span>OpenAPI</span>
                    </div>
                </div>
            </div>

        </div>

        <footer>
            🐘 PHP — Guia de Estudos &bull; Próximos Passos
        </footer>

    </div>

    <a href="?codigo=1" class="code-btn">📄 Código</a>
</body>
</html>