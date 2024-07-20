<?php
//Soma até número negativo (Usando Do While)

$soma = 0;

do {
    
    echo "Insira um número inteiro (negativo para sair): ";
    $numero = intval(fgets(STDIN));
    if ($numero >= 0) {
        $soma += $numero;
    }
} while ($numero >= 0);

echo "A soma dos números inseridos é: $soma\n";
?>
