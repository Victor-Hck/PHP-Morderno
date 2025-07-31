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

        <h1>Trabalhando com números aleatorios</h1>
    <?php
        $aleatorio = rand(0, 100);
        echo "Gerando um número aleatorio entre 0 e 100...<br>";
        echo "O valor gerado foi <strong>$aleatorio</strong>";
    ?>
        <br><br>
        <a href=""><button type="$submit">Gerar outro</button></a>
    </main>
</body>
</html>