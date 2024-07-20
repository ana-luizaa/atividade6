<?php
// Inserir números inteiros até que um número negativo seja inserido e exibir a soma dos números (Usando while)

echo "Insira números inteiros (digite um número negativo para parar): \n";

$soma = 0;
while (true) {
    $numero = intval(fgets(STDIN));
    if ($numero < 0) {
        break;
    }
    $soma += $numero;
}
echo "A soma dos números inseridos é: " . $soma . "\n";
?>
