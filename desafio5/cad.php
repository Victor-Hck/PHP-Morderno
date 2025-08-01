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
        <h1>Analisador de Número Real</h1>
    <?php 
        $pegandoValor = $_GET["real"];

        // Corrige para formato padrão: remove milhar e troca vírgula por ponto
        $valorCorrigido = str_replace('.', '', $pegandoValor);
        $valorConverter = str_replace(',', '.', $pegandoValor);

        // Converte para float e int
        $converterReal = floatval($pegandoValor);
        $converterInteiro = intval($valorCorrigido);

        // Pegando valor decimal
        $converterFracionado = fmod($converterReal, 1);


        echo "Analisando o número <strong>$pegandoValor</strong> informado pelo usuário:<br><br>";
        echo "<strong>°</strong> A parte inteira do número é <strong>$converterInteiro</strong><br>";
        echo "<strong>°</strong> A parte fracionária do número é <strong>$converterFracionado</strong><br><br>";
    ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </main>
</body>
</html>