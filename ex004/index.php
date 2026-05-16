<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>exercicios/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testador de Login | Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/exercicios.css">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="card">
        <h1>🔐 <span>Login</span></h1>
        <p class="sub">Testador de credenciais</p>
        <div class="credentials-hint">
            💡 Credenciais de teste: <code>admin</code> / <code>12345</code>
        </div>
        <form action="" method="post">
            <div class="field">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário" required>
            </div>
            <div class="field">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuariocadastrado = 'admin';
            $senhacadastrada = '12345';
            $usuarioDigitado = $_POST['usuario'] ?? '';
            $senhaDigitada = $_POST['senha'] ?? '';

            if ($usuarioDigitado === $usuariocadastrado && $senhaDigitada === $senhacadastrada) {
                echo '<div class="result success">✅ Acesso concedido!</div>';
            } elseif ($usuarioDigitado !== $usuariocadastrado && $senhaDigitada === $senhacadastrada) {
                echo '<div class="result error">❌ Usuário não encontrado.</div>';
            } elseif ($usuarioDigitado === $usuariocadastrado && $senhaDigitada !== $senhacadastrada) {
                echo '<div class="result warning">⚠️ Senha incorreta.</div>';
            } else {
                echo '<div class="result error">❌ Usuário e senha incorretos.</div>';
            }
        }
        ?>
    </div>
<a href="?codigo=1" class="code-btn">?? C�digo</a>
</body>
</html>
