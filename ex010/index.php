<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularios retroalimentados</title>
</head>
<body>
    <?php 
        // Capturando os dados do formulário Retroalimentado
        $valor1 = $_GET['num1'] ?? 0;
        $valor2 = $_GET['num2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">Numero1</label>
            <input type="number" name="num1" id="num1" value="<?=$valor1?>">
            <label for="num2">Numero2</label>
            <input type="number" name="num2" id="num2" value="<?=$valor2?>">
            <input type="submit" value="Somar">

        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma entre os valores $valor1 e $valor2 é igual a <strong>$soma</strong></p>";
        ?>
    </section>
</body>
</html>