<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Exemplo de double quated e single quated
        $nome = "Victor";
        echo "Olá $nome !"; // Tem interpretação
        echo 'Olá $nome !'; // Não tem interpretação

        // Valores declarados dentro de CONSTANTES só seram exibidas utilizando operador de concatenação 
        const CANAL = "Curso em Vídeo \u{1f499}";
        echo "Eu adoro o " . CANAL;
    ?>
</body>
</html>