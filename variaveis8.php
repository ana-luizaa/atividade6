<?php
//Soma de uma sequência de números (Usando Do While)

$soma = 0;
do {
    
    echo "Insira um número inteiro (0 para sair): ";
    $numero = intval(fgets(STDIN));
    $soma += $numero;
} while ($numero != 0);

echo "A soma dos números inseridos é: $soma\n";
?>
