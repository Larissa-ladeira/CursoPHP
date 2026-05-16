<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <div class="bg-orbs">
        <span class="o1"></span>
        <span class="o2"></span>
        <span class="o3"></span>
    </div>

    <div class="container">

        <header>
            <div class="logo">🐘</div>
            <h1>Curso PHP</h1>
            <p>Explorando os fundamentos do PHP com exercícios práticos</p>
            <div class="stats">
                <div>📁 <strong>4</strong> módulos</div>
                <div>📄 <strong>8</strong> exercícios</div>
                <div>⚡ PHP 8+</div>
            </div>
        </header>

        <div class="section-title">📚 Exercícios</div>

        <div class="cards">

            <a href="ex000/index.php" class="card c0">
                <div class="icon">🌎</div>
                <h3>Hello World</h3>
                <p class="desc">Primeiro contato com PHP. Exibe "Olá, Mundo" com um emoji usando <code>echo</code>.</p>
                <div class="tags"><span>echo</span><span>strings</span></div>
                <div class="arrow">→</div>
            </a>

            <a href="ex001/index.php" class="card c1">
                <div class="icon">🖥️</div>
                <h3>Dados do Servidor</h3>
                <p class="desc">Informações da configuração do PHP e do servidor com <code>phpinfo()</code>.</p>
                <div class="tags"><span>phpinfo</span><span>servidor</span></div>
                <div class="arrow">→</div>
            </a>

            <a href="ex001/index1.php" class="card c2">
                <div class="icon">✋</div>
                <h3>Qual é o seu nome?</h3>
                <p class="desc">Formulário interativo que pergunta seu nome e exibe uma saudação personalizada.</p>
                <div class="tags"><span>form</span><span>POST</span><span>$_POST</span></div>
                <div class="arrow">→</div>
            </a>

            <a href="ex002/index.php" class="card c2">
                <div class="icon">📞</div>
                <h3>Tradutor de DDD</h3>
                <p class="desc">Digite um DDD e descubra o estado correspondente usando <code>switch/case</code>.</p>
                <div class="tags"><span>switch</span><span>case</span><span>form</span></div>
                <div class="arrow">→</div>
            </a>

            <a href="ex003/index.php" class="card c3">
                <div class="icon">⚡</div>
                <h3>Estruturas de Controle</h3>
                <p class="desc">Demonstração completa de if/else, switch, loops, arrays e POO com design moderno.</p>
                <div class="tags"><span>if/else</span><span>switch</span><span>loops</span><span>arrays</span><span>POO</span></div>
                <div class="arrow">→</div>
            </a>

            <a href="ex005/index.php" class="card c0">
                <div class="icon">📄</div>
                <h3>Relatório CSV</h3>
                <p class="desc">Cadastre contatos (nome, e-mail, telefone) e visualize em uma tabela HTML lendo de um arquivo CSV.</p>
                <div class="tags"><span>CSV</span><span>fputcsv</span><span>fgetcsv</span><span>tabela</span></div>
                <div class="arrow">→</div>
            </a>

            <a href="ex006/index.php" class="card c0">
                <div class="icon">🔄</div>
                <h3>Conversor de Unidades</h3>
                <p class="desc">Converta entre distância, massa, temperatura e volume. Escolha a unidade de entrada e saída.</p>
                <div class="tags"><span>conversão</span><span>form</span><span>select</span><span>match</span></div>
                <div class="arrow">→</div>
            </a>

            <a href="ex004/index.php" class="card c0">
                <div class="icon">🔐</div>
                <h3>Testador de Login</h3>
                <p class="desc">Validação de credenciais com condicionais. Simula um sistema de login.</p>
                <div class="tags"><span>if/else</span><span>login</span><span>validação</span></div>
                <div class="arrow">→</div>
            </a>

        </div>

        <footer>
            Feito com 💜 &bull; <a href="https://php.net" target="_blank">PHP</a> &mdash; Curso de Fundamentos
        </footer>

    </div>

</body>
</html>
