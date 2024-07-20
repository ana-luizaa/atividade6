<?php
// Exibe a tabuada de um número inserido pelo usuário até 10 (Usando while)

echo "Insira um número inteiro: ";
$numero = intval(fgets(STDIN));

$i = 1;
while ($i <= 10) {
    echo $numero . " x " . $i . " = " . ($numero * $i) . "\n";
    $i++;
}
?>
