<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <head>
        
    </head>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $numberValue = $_GET["number"];
            $valorInteiro = intval($numberValue);
            $antecessor = $valorInteiro - 1;
            $sucessor = $valorInteiro + 1;
            echo "O número escolhido foi <strong>$valorInteiro</strong><br>O seu antecessor é $antecessor<br>O seu sucessor é $sucessor<br>";
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>