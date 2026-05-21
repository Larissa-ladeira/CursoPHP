<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="../css/ex010.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <a href="../index.php" class="back">← Voltar</a>
    <div class="card">
        <h1>💱 <span>Conversor</span></h1>
        <p class="sub">Real Brasileiro → Dólar Americano</p>

        <form action="" method="post">
            <div class="field">
                <label for="valor">Valor em R$</label>
                <input type="number" step="0.01" id="valor" name="valor" placeholder="Digite o valor" required>
            </div>
            <button type="submit" name="converter">Converter</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["converter"])):
            $valor = (float) $_POST["valor"];
            $fim = date("m-d-Y");
            $inicio = date("m-d-Y", strtotime("-30 days"));
            $url_cotacao = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial='$inicio',dataFinalCotacao='$fim')?\$top=1&\$format=json&\$orderby=dataHoraCotacao%20desc";
            $ctx = stream_context_create(["ssl" => ["verify_peer" => false, "verify_peer_name" => false]]);
            $json = @file_get_contents($url_cotacao, false, $ctx);
            if ($json === false && function_exists("curl_init")) {
                $ch = curl_init($url_cotacao);
                curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 10]);
                $json = curl_exec($ch);
                curl_close($ch);
            }
            $dados = json_decode($json, true);
            if (isset($dados["value"][0]["cotacaoVenda"])) {
                $cotacao = (float) $dados["value"][0]["cotacaoVenda"];
                $aviso = "informação retirada do <a href=\"https://www.bcb.gov.br/\" target=\"_blank\" style=\"color:#fdcb6e;text-decoration:underline\">banco central</a>";
            } else {
                $cotacao = 5.03;
                $aviso = "⚠️ Não foi possível obter a cotação. Usando valor fixo de R$ 5,03";
            }
            $conversor = $valor / $cotacao;
        ?>
        <div class="result-container">
            <div class="result-item">
                <div class="value original" style="font-size:1.1rem;color:#f472b6;-webkit-text-fill-color:#f472b6">Seus R$ <?= number_format($valor, 2, ',', '.') ?><br>equivalem a U$ <?= number_format($conversor, 2, ',', '.') ?></div>
                <div style="margin-top:12px;font-size:.75rem;color:#666699">* <?= $aviso ?></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <footer>© Curso PHP</footer>
</body>
</html>