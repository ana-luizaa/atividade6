<?php
// Exibir a soma de uma sequência de números inteiros inseridos (Usando while)

echo "Insira uma sequência de números inteiros (digite 0 para parar): \n";

$soma = 0;
while (true) {
    $numero = intval(fgets(STDIN));
    if ($numero == 0) {
        break;
    }
    $soma += $numero;
}
echo "A soma dos números inseridos é: " . $soma . "\n";
?>
