<?php
// Números pares até o número inserido (Usando Do While)

echo "Insira um número inteiro positivo: ";
$numero = intval(fgets(STDIN));

$i = 0;
do {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
} while ($i <= $numero);
?>
