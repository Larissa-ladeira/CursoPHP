<?php if (isset($_GET['codigo'])) { ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Código | Curso PHP</title><link rel="stylesheet" href="../css/codigo.css"></head><body><div class="top"><a href="?">← Voltar</a><span>ex006/index.php</span></div><div class="wrap"><?php highlight_file(__FILE__); ?></div><a href="?codigo=1" class="code-btn">📄 Código</a>
</body></html><?php exit; } ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Unidades | Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/exercicios.css">
    <link rel="stylesheet" href="../css/ex006.css">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="card">
        <h1>🔄 <span>Conversor de Unidades</span></h1>
        <p class="sub">Escolha a unidade de entrada e a unidade de saída</p>

        <?php
        $unidades = [
            'km'  => ['nome' => 'Quilômetros',     'tipo' => 'distancia',   'base' => 1000],
            'm'   => ['nome' => 'Metros',          'tipo' => 'distancia',   'base' => 1],
            'cm'  => ['nome' => 'Centímetros',     'tipo' => 'distancia',   'base' => 0.01],
            'mm'  => ['nome' => 'Milímetros',      'tipo' => 'distancia',   'base' => 0.001],
            'mi'  => ['nome' => 'Milhas',          'tipo' => 'distancia',   'base' => 1609.344],
            'ft'  => ['nome' => 'Pés',             'tipo' => 'distancia',   'base' => 0.3048],
            'in'  => ['nome' => 'Polegadas',       'tipo' => 'distancia',   'base' => 0.0254],
            'kg'  => ['nome' => 'Quilogramas',     'tipo' => 'massa',       'base' => 1000],
            'g'   => ['nome' => 'Gramas',          'tipo' => 'massa',       'base' => 1],
            'mg'  => ['nome' => 'Miligramas',      'tipo' => 'massa',       'base' => 0.001],
            'lb'  => ['nome' => 'Libras',          'tipo' => 'massa',       'base' => 453.592],
            'oz'  => ['nome' => 'Onças',           'tipo' => 'massa',       'base' => 28.3495],
            'c'   => ['nome' => 'Celsius',         'tipo' => 'temperatura'],
            'f'   => ['nome' => 'Fahrenheit',      'tipo' => 'temperatura'],
            'k'   => ['nome' => 'Kelvin',          'tipo' => 'temperatura'],
            'l'   => ['nome' => 'Litros',          'tipo' => 'volume',      'base' => 1],
            'ml'  => ['nome' => 'Mililitros',      'tipo' => 'volume',      'base' => 0.001],
            'gal' => ['nome' => 'Galões',          'tipo' => 'volume',      'base' => 3.78541],
        ];

        $resultado = null;
        $erro = null;
        $entrada_nome = '';
        $saida_nome = '';
        $sel_de = $_POST['de'] ?? $_GET['de'] ?? '';
        $sel_para = $_POST['para'] ?? $_GET['para'] ?? '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['de'])) {
            $valor = floatval($_POST['valor'] ?? $_GET['valor'] ?? 0);
            $de = $_POST['de'] ?? $_GET['de'] ?? '';
            $para = $_POST['para'] ?? $_GET['para'] ?? '';

            if (!isset($unidades[$de]) || !isset($unidades[$para])) {
                $erro = 'Unidade inválida.';
            } elseif ($unidades[$de]['tipo'] !== $unidades[$para]['tipo']) {
                $erro = 'Unidades incompatíveis. Selecione unidades do mesmo tipo.';
            } elseif ($de === $para) {
                $resultado = $valor;
                $entrada_nome = $unidades[$de]['nome'];
                $saida_nome = $unidades[$para]['nome'];
            } else {
                $entrada_nome = $unidades[$de]['nome'];
                $saida_nome = $unidades[$para]['nome'];

                if ($unidades[$de]['tipo'] === 'temperatura') {
                    $celsius = match ($de) {
                        'c' => $valor,
                        'f' => ($valor - 32) * 5 / 9,
                        'k' => $valor - 273.15,
                    };
                    $resultado = match ($para) {
                        'c' => $celsius,
                        'f' => $celsius * 9 / 5 + 32,
                        'k' => $celsius + 273.15,
                    };
                } else {
                    $base = $valor * $unidades[$de]['base'];
                    $resultado = $base / $unidades[$para]['base'];
                }
            }
        }
        ?>

        <form action="" method="post">
            <div class="converter-grid">
                <div class="field">
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" id="valor" step="any"
                           value="<?= htmlspecialchars($_POST['valor'] ?? $_GET['valor'] ?? '') ?>"
                           placeholder="Ex: 10" required>
                </div>
                <div></div>
                <div></div>

                <div class="field">
                    <label for="de">De</label>
                    <select name="de" id="de" required>
                        <option value="">— Selecione —</option>
                        <optgroup label="📏 Distância">
                            <?php foreach (['km','m','cm','mm','mi','ft','in'] as $chave): ?>
                                <option value="<?= $chave ?>" <?= ($sel_de === $chave) ? 'selected' : '' ?>>
                                    <?= $unidades[$chave]['nome'] ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                        <optgroup label="⚖️ Massa">
                            <?php foreach (['kg','g','mg','lb','oz'] as $chave): ?>
                                <option value="<?= $chave ?>" <?= ($sel_de === $chave) ? 'selected' : '' ?>>
                                    <?= $unidades[$chave]['nome'] ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                        <optgroup label="🌡️ Temperatura">
                            <?php foreach (['c','f','k'] as $chave): ?>
                                <option value="<?= $chave ?>" <?= ($sel_de === $chave) ? 'selected' : '' ?>>
                                    <?= $unidades[$chave]['nome'] ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                        <optgroup label="💧 Volume">
                            <?php foreach (['l','ml','gal'] as $chave): ?>
                                <option value="<?= $chave ?>" <?= ($sel_de === $chave) ? 'selected' : '' ?>>
                                    <?= $unidades[$chave]['nome'] ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                    </select>
                </div>

                <div class="equals">→</div>

                <div class="field">
                    <label for="para">Para</label>
                    <select name="para" id="para" required>
                        <option value="">— Selecione —</option>
                        <optgroup label="📏 Distância">
                            <?php foreach (['km','m','cm','mm','mi','ft','in'] as $chave): ?>
                                <option value="<?= $chave ?>" <?= ($sel_para === $chave) ? 'selected' : '' ?>>
                                    <?= $unidades[$chave]['nome'] ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                        <optgroup label="⚖️ Massa">
                            <?php foreach (['kg','g','mg','lb','oz'] as $chave): ?>
                                <option value="<?= $chave ?>" <?= ($sel_para === $chave) ? 'selected' : '' ?>>
                                    <?= $unidades[$chave]['nome'] ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                        <optgroup label="🌡️ Temperatura">
                            <?php foreach (['c','f','k'] as $chave): ?>
                                <option value="<?= $chave ?>" <?= ($sel_para === $chave) ? 'selected' : '' ?>>
                                    <?= $unidades[$chave]['nome'] ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                        <optgroup label="💧 Volume">
                            <?php foreach (['l','ml','gal'] as $chave): ?>
                                <option value="<?= $chave ?>" <?= ($sel_para === $chave) ? 'selected' : '' ?>>
                                    <?= $unidades[$chave]['nome'] ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                    </select>
                </div>
            </div>

            <button type="submit">Converter</button>
        </form>

        <?php if ($erro): ?>
            <div class="result-box error">
                ❌ <?= htmlspecialchars($erro) ?>
            </div>
        <?php elseif ($resultado !== null): ?>
            <?php
            $tipo = $unidades[$sel_de]['tipo'];
            $tipo_classe = match ($tipo) {
                'distancia' => 'distancia',
                'massa' => 'massa',
                'temperatura' => 'temperatura',
                'volume' => 'volume',
            };
            $tipo_label = match ($tipo) {
                'distancia' => '📏 Distância',
                'massa' => '⚖️ Massa',
                'temperatura' => '🌡️ Temperatura',
                'volume' => '💧 Volume',
            };
            ?>
            <div class="result-box success">
                <div class="type-badge <?= $tipo_classe ?>"><?= $tipo_label ?></div>
                <div class="valor"><?= number_format($resultado, 4, ',', '.') ?></div>
                <div class="unidade"><?= htmlspecialchars($saida_nome) ?></div>
                <div class="arrow">⬅</div>
                <div style="color:#9999bb; font-size:.9rem;">
                    <?= number_format($valor, 4, ',', '.') ?> <?= htmlspecialchars($entrada_nome) ?>
                </div>
            </div>

            <div class="quick-links">
                <?php
                $exemplos = [
                    '1 km em m' => ['de' => 'km', 'para' => 'm', 'valor' => 1],
                    '1 m em cm' => ['de' => 'm', 'para' => 'cm', 'valor' => 1],
                    '1 kg em g' => ['de' => 'kg', 'para' => 'g', 'valor' => 1],
                    '1 lb em kg' => ['de' => 'lb', 'para' => 'kg', 'valor' => 1],
                    '100 °F em °C' => ['de' => 'f', 'para' => 'c', 'valor' => 100],
                    '1 gal em L' => ['de' => 'gal', 'para' => 'l', 'valor' => 1],
                ];
                foreach ($exemplos as $rotulo => $params):
                    $q = http_build_query(['valor' => $params['valor'], 'de' => $params['de'], 'para' => $params['para']]);
                ?>
                    <a href="?<?= $q ?>"><?= $rotulo ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
<a href="?codigo=1" class="code-btn">?? C�digo</a>
</body>
</html>
