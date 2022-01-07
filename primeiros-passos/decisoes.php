<?php

setlocale(LC_ALL, 'pt_BR');
$idade = (int)readline("Digite sua Idade: ");
$acompanhado = (bool) readline("Está Acompanhado?: ");

echo "Você Só pode Entrar se Tiver mais de 18 Anos ou mais de 16 acompanhado" . PHP_EOL;
if ($idade >= 18) {
    echo "Você tem $idade Anos. Pode Entrar" . PHP_EOL;
} else if ($idade >= 16 && $acompanhado === true) {
    echo "Você tem $idade Anos,e está acompanhado.Pode Entrar" . PHP_EOL;
} else {
    echo "Você tem $idade Anos. Não Pode Entrar" . PHP_EOL;
}


echo PHP_EOL;
echo "Adeus!";
