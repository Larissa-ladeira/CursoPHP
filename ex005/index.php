<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><style>*{margin:0;padding:0;box-sizing:border-box}body{background:#0b0a1a;padding:20px;font-family:'Inter',sans-serif}.top{display:flex;align-items:center;gap:12px;margin-bottom:20px;flex-wrap:wrap}.top a{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border-radius:10px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);color:#9999bb;text-decoration:none;font-size:.8rem;transition:all .2s}.top a:hover{background:rgba(255,255,255,0.08);color:#fff}.top span{color:#555577;font-size:.75rem}pre{margin:0}.wrap{background:rgba(0,0,0,0.5);border-radius:12px;padding:20px;overflow-x:auto;border:1px solid rgba(255,255,255,0.04)}.wrap code{font-family:'JetBrains Mono','Fira Code',monospace;font-size:.82rem;line-height:1.7}@media(max-width:600px){body{padding:12px}.wrap{padding:12px}.wrap code{font-size:.72rem}}</style></head><body><div class="top"><a href="?">← Voltar</a><span>ex005/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório CSV | Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/exercicios.css">
    <link rel="stylesheet" href="../css/ex005.css">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="card">
        <h1>📄 <span>Relatório CSV</span></h1>
        <p class="sub">Cadastre contatos e visualize a tabela</p>

        <?php
        $arquivo = __DIR__ . '/contatos.csv';
        $msg = '';
        $tipo_msg = '';

        $cabecalho = ['Nome', 'Email', 'Telefone'];

        if (isset($_GET['download'])) {
            if (file_exists($arquivo)) {
                header('Content-Type: text/csv; charset=utf-8');
                header('Content-Disposition: attachment; filename="contatos.csv"');
                readfile($arquivo);
            }
            exit;
        }

        if (!file_exists($arquivo) || filesize($arquivo) === 0) {
            $fp = fopen($arquivo, 'w');
            if ($fp) {
                fputcsv($fp, $cabecalho);
                fclose($fp);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['acao'])) {
                if ($_POST['acao'] === 'cadastrar') {
                    $nome = trim($_POST['nome'] ?? '');
                    $email = trim($_POST['email'] ?? '');
                    $telefone = trim($_POST['telefone'] ?? '');

                    if ($nome === '' || $email === '' || $telefone === '') {
                        $msg = 'Preencha todos os campos.';
                        $tipo_msg = 'erro';
                    } else {
                        $linha = [$nome, $email, $telefone];
                        $fp = fopen($arquivo, 'a');
                        if ($fp) {
                            fputcsv($fp, $linha);
                            fclose($fp);
                            $msg = "$nome cadastrado com sucesso!";
                            $tipo_msg = 'sucesso';
                        } else {
                            $msg = 'Erro ao salvar o arquivo.';
                            $tipo_msg = 'erro';
                        }
                    }
                } elseif ($_POST['acao'] === 'limpar') {
                    $fp = fopen($arquivo, 'w');
                    if ($fp) {
                        fputcsv($fp, $cabecalho);
                        fclose($fp);
                    }
                    $msg = 'Todos os registros foram removidos.';
                    $tipo_msg = 'sucesso';
                }
            }
        }

        $registros = [];
        if (file_exists($arquivo) && filesize($arquivo) > 0) {
            $fp = fopen($arquivo, 'r');
            if ($fp) {
                $primeira = true;
                while (($linha = fgetcsv($fp)) !== false) {
                    if ($primeira) { $primeira = false; continue; }
                    $registros[] = $linha;
                }
                fclose($fp);
            }
        }
        ?>

        <?php if ($msg): ?>
            <div class="msg <?= $tipo_msg ?>"><?= htmlspecialchars($msg) ?></div>
        <?php endif; ?>

        <form method="post">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="field">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Ex: João Silva" required>
            </div>
            <div class="field">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Ex: joao@email.com" required>
            </div>
            <div class="field">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" placeholder="Ex: (11) 99999-9999" required>
            </div>
            <button type="submit">Adicionar</button>
        </form>

        <div class="tabela-wrap">
            <?php if (empty($registros)): ?>
                <div class="vazio">
                    <span>📭</span>
                    Nenhum contato cadastrado ainda.
                </div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registros as $i => $r): ?>
                            <tr>
                                <td style="color:#555577"><?= $i + 1 ?></td>
                                <td><?= htmlspecialchars($r[0] ?? '') ?></td>
                                <td><?= htmlspecialchars($r[1] ?? '') ?></td>
                                <td><?= htmlspecialchars($r[2] ?? '') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="linhas"><?= count($registros) ?> registro(s)</div>
            <?php endif; ?>
        </div>

        <?php if (!empty($registros)): ?>
            <div class="acoes">
                <form method="post" style="flex:1; display:contents;" onsubmit="return confirm('Limpar todos os registros?')">
                    <input type="hidden" name="acao" value="limpar">
                    <button type="submit" class="btn-limpar">🗑️ Limpar</button>
                </form>
                <a href="?download=1" class="btn-baixar">⬇️ Baixar CSV</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
