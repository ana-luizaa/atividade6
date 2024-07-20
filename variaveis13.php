<?php
//Média de números até número negativo (Usando Do While)

$soma = 0;
$contador = 0;

do {
    
    echo "Insira um número inteiro (negativo para sair): ";
    $numero = intval(fgets(STDIN));
    if ($numero >= 0) {
        $soma += $numero;
        $contador++;
    }
} while ($numero >= 0);

if ($contador > 0) {
    $media = $soma / $contador;
    echo "A média dos números inseridos é: $media\n";
} else {
    echo "Nenhum número positivo foi inserido.\n";
}
?>
