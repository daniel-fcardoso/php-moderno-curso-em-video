<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $din = $_GET["din"] ?? 0;
            $din = (float) str_replace(',', '.', $din); // aceita "10,50" também

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $base = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/";
            $metodo = "CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)";
            $parametros = "?@dataInicial='{$inicio}'&@dataFinalCotacao='{$fim}'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao";

            $url = $base . $metodo . $parametros;

            $resposta = @file_get_contents($url);
            $dados = $resposta ? json_decode($resposta, true) : null;
            $dollar = $dados["value"][0]["cotacaoVenda"] ?? null;

            if ($dollar) {
                echo "Seus R$ " . number_format($din, 2, ',', '.') . " equivalem a <strong>US$ " . number_format($din / $dollar, 2, ',', '.') . "</strong>";
                echo "<p>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>";
            } else {
                echo "<p>Não foi possível obter a cotação agora. Tente novamente em instantes.</p>";
            }
        ?>          
        <p><a href="javascript:history.go(-1)"><button>Voltar</button></a></p>
    </section>
</body>
</html>
