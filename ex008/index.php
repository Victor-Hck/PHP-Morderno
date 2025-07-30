<?php 
    // Valor absoluto
    $valorAbsoluto = abs(500);
    echo "Valor absoluto $valorAbsoluto<br><br>";

    // conversor de bases
    $converterOctal = base_convert(254, 10, 8); // octal
    echo "Base octal $converterOctal<br>";
    $converterHexadecimal = base_convert(254, 10, 8); // hexadecimal
    echo "Converter Hexadecimal $converterHexadecimal<br>";
    $converterBinario = base_convert(254, 10, 2); // binario
    echo "Converter Binario $converterBinario<br><br>";

    // funções de arredondamento
    $valorArredondar = 7.3;

    $arredondaParaCima = ceil($valorArredondar);
    echo "Arredondando para cima $arredondaParaCima<br>";

    $arredondaParaBaixo = floor($valorArredondar);
    echo "Arredondando para baixo $arredondaParaBaixo<br>";

    $arredondaNormal = round($valorArredondar);
    echo "Arredondando normal $arredondaNormal<br>";
    echo "Valor a ser redondado $valorArredondar<br><br>";

    // divisão inteira
    $divisaoInteira = intdiv(5, 2);
    $restoDaDivisao = 5 % 2;
    $divisaoReal = 5 / 2;
    echo "Divisão inteira $divisaoInteira<br>Resto da divisão $restoDaDivisao<br>Divisão real $divisaoReal";

    // Funções max(); e min();
    $valorMax = max(5, 2);
    echo "Valor Maximo $valorMax";
    $valorMin = min(5, 2);
    echo "Valor Minimo $valorMin<br><br>";

    $numberString = "2" + "2";
    echo "$numberString";
?>