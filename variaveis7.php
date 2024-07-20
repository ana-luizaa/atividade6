<?php
// Tabuada de um número até 10 (Usando Do While)

echo "Insira um número inteiro: ";
$numero = intval(fgets(STDIN));

$i = 1;
do {
    echo "$numero x $i = " . ($numero * $i) . "\n";
    $i++;
} while ($i <= 10);
?>
