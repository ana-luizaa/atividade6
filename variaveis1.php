<?php
// Exibe todos os números pares entre 0 e um número inserido (Usando while)

echo "Insira um número inteiro positivo: ";
$numero = intval;

$i = 0;
while ($i <= $numero) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
}
?>
