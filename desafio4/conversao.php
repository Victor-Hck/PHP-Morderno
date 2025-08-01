<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            // Cotação vinda da API
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($url), true);

            // var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            $valorpegar = sprintf("%.2f", $_GET["number"]);
            $valorconverter = floatval($valorpegar);
            $valorconvertido = sprintf("%.2f", $valorconverter / $cotacao);

            echo "Seus R$ $valorconverter equivalem a <strong>US$ $valorconvertido</strong><br>";
            echo "<br><strong>*cotação fixa de $cotacao</strong> informada diretamente no código.";
        ?>
        <br><br>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
        </main>
</body>
</html>