<?php
//Gerar números aleatórios até 50 (Usando Do While)

$contador = 0;

do {
    $numero = rand(1, 100);
    $contador++;
} while ($numero != 50);

echo "Foram gerados $contador números até aparecer o 50.\n";
?>
