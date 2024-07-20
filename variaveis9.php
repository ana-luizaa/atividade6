<?php
//Tentativas de senha (Usando Do While)

$senhaCorreta = "ana";
$tentativas = 0;

do {
    
    echo "Insira a senha: ";
    $senha = trim(fgets(STDIN));
    $tentaivas++;

    if ($senha === $senhaCorreta) {
        echo "Senha correta! Acesso permitido.\n";
        break;
    } else {
        echo "Senha incorreta.\n";
    }
} while ($tentaivas < 3);

if ($tentaivas == 3 && $senha !== $senhaCorreta) {
    echo "Você excedeu o número de tentativas.\n";
}
?>
