<!DOCTYPE html>
<html lang="en">
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
            const DOLAR = 5.22;
            $valorpegar = sprintf("%.2f", $_GET["number"]);
            $valorconverter = floatval($valorpegar);
            $valorconvertido = sprintf("%.2f", $valorconverter / DOLAR);
            echo "Seus R$ $valorconverter equivalem a <strong>US$ $valorconvertido</strong><br>";
            echo "<br><strong>*cotação fixa de " . DOLAR . "</strong> informada diretamente no código.";
        ?>
        <br><br>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
        </main>
</body>
</html>