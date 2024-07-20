<?php
// Solicitar uma senha e permitir até três tentativas (Usando while)

$senhaCorreta = "analuiza"; 
$tentativas = 0;
$maxTentativas = 3;

while ($tentativas < $maxTentativas) {
    echo "Insira a senha: ";
    $senha = trim(fgets(STDIN));

    if ($senha == $senhaCorreta) {
        echo "Senha correta! Acesso concedido.\n";
        break;
    } else {
        echo "Senha incorreta. Tente novamente.\n";
        $tentativas++;
    }
}

if ($tentativas == $maxTentativas) {
    echo "Número máximo de tentativas alcançado. Acesso negado.\n";
}
?>
