<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex008/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?" class="code-btn">← Voltar ao exercício</a>
</body></html><?php exit; } ?>
<?php
session_start();

$cat = isset($_GET['categoria']) ? $_GET['categoria'] : null;
$pag = $_GET['pagina'] ?? null;

$post_submit = $_SERVER['REQUEST_METHOD'] === 'POST';
$post_email = $_POST['email'] ?? '';
$post_senha = $_POST['senha'] ?? '';

$metodo = $_SERVER['REQUEST_METHOD'];
$ip_cliente = $_SERVER['REMOTE_ADDR'];
$url_atual = $_SERVER['REQUEST_URI'];
$navegador = $_SERVER['HTTP_USER_AGENT'];

$_SESSION['usuario_id'] = 42;
$_SESSION['usuario_nome'] = "Larissa";

$nome_do_cookie = "tema_preferido";
$valor_do_cookie = "dark";
$tempo_expiracao = time() + (86400 * 30);
setcookie($nome_do_cookie, $valor_do_cookie, $tempo_expiracao, "/");

$cookie_lido = isset($_COOKIE['tema_preferido']) ? $_COOKIE['tema_preferido'] : null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  - $_GET e $_POST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ex008.css">
</head>
<body>
<a href="../index.php" class="back">← Voltar</a>
<div class="container">

    <header>
        <h1>📨 Superglobais PHP</h1>
        <p>$_GET, $_POST, $_SERVER, $_SESSION e $_COOKIE</p>
    </header>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-get">🔗</div>
            <h2>$_GET — Dados pela URL</h2>
        </div>
        <div class="card-content">
            <p class="explica">A superglobal <code>$_GET</code> captura parâmetros enviados pela URL após o <code>?</code>. Os dados ficam visíveis para o usuário, ideais para buscas, filtros e paginação. Use sempre <code>??</code> (null coalescing) para definir valores padrão.</p>
            <div class="code-block">
                <span class="comment">// URL: pagina.php?categoria=livros&amp;pagina=2</span><br>
                $categoria = $_GET[<span class="string">'categoria'</span>] ?? <span class="string">'Geral'</span>;<br>
                $pagina&nbsp;&nbsp;&nbsp; = $_GET[<span class="string">'pagina'</span>] ?? <span class="number">1</span>;
            </div>
            <div class="output-box">
                <div class="tag">▶ Teste clicando nos links</div>
                <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px">
                    <a href="?categoria=livros&pagina=2" class="badge badge-get" style="text-decoration:none">📚 categoria=livros&pagina=2</a>
                    <a href="?categoria=php&pagina=1" class="badge badge-get" style="text-decoration:none">🐘 categoria=php&pagina=1</a>
                    <a href="?" class="badge badge-get" style="text-decoration:none">🚫 sem parâmetros</a>
                </div>
                <div class="output-flex">
                    <div class="result-item">
                        <div class="result-label">categoria</div>
                        <div class="result-value"><?= htmlspecialchars($cat ?? 'Geral') ?></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">página</div>
                        <div class="result-value"><?= $pag ?? 1 ?></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">URL atual</div>
                        <div class="result-value" style="font-size:0.75rem;word-break:break-all"><?= htmlspecialchars($_SERVER['REQUEST_URI']) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-post">📩</div>
            <h2>$_POST — Dados ocultos no corpo</h2>
        </div>
        <div class="card-content">
            <p class="explica">A superglobal <code>$_POST</code> recebe dados enviados de forma oculta no corpo da requisição. É o método padrão para formulários de cadastro, login e envio de senhas, pois os dados não aparecem na URL.</p>
            <div class="code-block">
                <span class="comment">// formulário com method="post"</span><br>
                &lt;form method=<span class="string">"post"</span>&gt;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;input name=<span class="string">"email"</span>&gt;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;input name=<span class="string">"senha"</span> type=<span class="string">"password"</span>&gt;<br>
                &lt;/form&gt;<br><br>
                <span class="comment">// PHP</span><br>
                $usuario = $_POST[<span class="string">'email'</span>] ?? <span class="string">''</span>;<br>
                $senha&nbsp;&nbsp; = $_POST[<span class="string">'senha'</span>] ?? <span class="string">''</span>;
            </div>
            <div class="output-box">
                <div class="tag">▶ Simule um envio</div>
                <form class="form-demo" action="" method="post">
                    <div class="form-row">
                        <input class="form-input" type="email" name="email" placeholder="seu@email.com" required>
                        <input class="form-input" type="password" name="senha" placeholder="senha" required>
                        <button class="form-btn" type="submit">Enviar</button>
                    </div>
                </form>
                <?php if ($post_submit): ?>
                    <?php if (empty($post_email) || empty($post_senha)): ?>
                        <div class="form-result error">❌ Todos os campos são obrigatórios</div>
                    <?php else: ?>
                        <div class="form-result success">✅ Dados recebidos por POST — Email: <strong><?= htmlspecialchars($post_email) ?></strong></div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="form-result info">ℹ️ Nenhum formulário enviado ainda</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-get">🖥️</div>
            <h2>$_SERVER — Informações do servidor</h2>
        </div>
        <div class="card-content">
            <p class="explica">A superglobal <code>$_SERVER</code> armazena dados do ambiente do servidor e da requisição atual. É muito útil para sistemas de roteamento, logging de acesso e auditoria de segurança.</p>
            <div class="code-block">
                $metodo&nbsp;&nbsp; = $_SERVER[<span class="string">'REQUEST_METHOD'</span>];<br>
                $ip&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = $_SERVER[<span class="string">'REMOTE_ADDR'</span>];<br>
                $url&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = $_SERVER[<span class="string">'REQUEST_URI'</span>];<br>
                $navegador = $_SERVER[<span class="string">'HTTP_USER_AGENT'</span>];
            </div>
            <div class="output-box">
                <div class="tag">▶ Dados da requisição atual</div>
                <div class="output-flex">
                    <div class="result-item">
                        <div class="result-label">Método HTTP</div>
                        <div class="result-value"><span class="result-inline blue"><?= $metodo ?></span></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">IP do visitante</div>
                        <div class="result-value"><span class="result-inline green"><?= $ip_cliente ?></span></div>
                    </div>
                    <div class="result-item">
                        <div class="result-label">URL atual</div>
                        <div class="result-value" style="font-size:0.75rem"><?= htmlspecialchars($url_atual) ?></div>
                    </div>
                </div>
                <div style="margin-top:12px">
                    <div class="result-item">
                        <div class="result-label">User Agent (navegador)</div>
                        <div class="result-value" style="font-size:0.75rem;word-break:break-all"><?= htmlspecialchars($navegador) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-post">🔐</div>
            <h2>$_SESSION — Dados no servidor</h2>
        </div>
        <div class="card-content">
            <p class="explica">A superglobal <code>$_SESSION</code> guarda dados no servidor de forma segura. Como a Web é stateless, as sessões permitem manter o usuário logado entre as páginas. O <code>session_start()</code> deve ser chamado antes de qualquer saída HTML.</p>
            <div class="code-block">
                <span class="comment">// deve ser chamado antes de qualquer saída HTML</span><br>
                <span class="keyword">session_start</span>();<br><br>
                $_SESSION[<span class="string">'usuario_id'</span>]&nbsp;&nbsp; = <span class="number">42</span>;<br>
                $_SESSION[<span class="string">'usuario_nome'</span>] = <span class="string">"Larissa"</span>;
            </div>
            <div class="output-box">
                <div class="tag">▶ Sessão ativa</div>
                <div class="obj-box">
                    <div class="obj-icon">👤</div>
                    <div class="obj-info">
                        <div class="obj-title">Olá, <?= $_SESSION['usuario_nome'] ?>!</div>
                        <div class="obj-desc">ID do usuário: <?= $_SESSION['usuario_id'] ?> &bull; ID da sessão: <?= session_id() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon icon-get">🍪</div>
            <h2>$_COOKIE — Dados no navegador</h2>
        </div>
        <div class="card-content">
            <p class="explica">A superglobal <code>$_COOKIE</code> armazena dados no navegador do usuário. Diferente da sessão, os cookies podem durar dias, meses ou anos. Use <code>setcookie()</code> para criar e <code>$_COOKIE</code> para ler.</p>
            <div class="code-block">
                <span class="comment">// criar cookie que dura 30 dias</span><br>
                <span class="keyword">setcookie</span>(<span class="string">"tema_preferido"</span>, <span class="string">"dark"</span>, time() + <span class="number">86400*30</span>, <span class="string">"/"</span>);<br><br>
                <span class="comment">// ler na próxima requisição</span><br>
                $tema = $_COOKIE[<span class="string">'tema_preferido'</span>] ?? <span class="string">'claro'</span>;
            </div>
            <div class="output-box">
                <div class="tag">▶ Cookie criado</div>
                <?php if ($cookie_lido): ?>
                    <div class="form-result success">✅ Cookie lido: <strong><?= $cookie_lido ?></strong> (expira em 30 dias)</div>
                <?php else: ?>
                    <div class="form-result info">ℹ️ Cookie "tema_preferido = dark" foi criado. Atualize a página para lê-lo.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <footer>
        Feito com 💜 &bull; PHP &mdash; Ex008
    </footer>

</div>

    <a href="?codigo=1" class="code-btn">📄 Código</a>
</body>
</html>
