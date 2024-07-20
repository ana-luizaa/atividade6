<?php
//Solicitar senha até correta (Usando Do While)

$senhaCorreta = "1234";

do {
   
    echo "Insira a senha: ";
    $senha = trim(fgets(STDIN));
} while ($senha !== $senhaCorreta);

echo "Senha correta! Acesso permitido.\n";
?>
