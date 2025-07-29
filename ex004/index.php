<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = "Gustavo";
        // var_dump($v);

        // $num = 3e2; // 3 x 10(2)
        // echo "O valor é $num";

        // $num = (integer) 3e2; // integer ou int atribui o valor de inteiro na variável, conhecido como coerção.
        // echo "O valor é $num";
        // var_dump($num);

        // coerção
        // $num = (float) "950";
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);
        // echo "O valor para casado é $casado"; // true mostra 1 false mostra 0.

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>