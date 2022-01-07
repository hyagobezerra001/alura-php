<?php

// echo "Calculadora IMC" . PHP_EOL;

// $altura = (float) readline("Digite Sua Altura (cm): ");
// $peso = (int) readline("Digite seu Peso (kg): ");

// $imc = round(($peso) / ($altura ** 2), 2);

// switch ($imc) {
//     case $imc < (float)18.5;
//         echo "Abaixo do Peso" . PHP_EOL;
//         break;

//     case $imc < (float)24.9;
//         echo "Peso Ideal" . PHP_EOL;
//         break;

//     case $imc > (float)24.9;
//         echo "Acima do Peso" . PHP_EOL;
//         break;

//     default:
//         echo "Erro ao definir o IMC";
// }


echo "Calculadora IMC" . PHP_EOL;

$altura = (float) readline("Digite Sua Altura (cm): ");
$peso = (int) readline("Digite seu Peso (kg): ");

echo "Seu IMC -> " . $imc = round(($peso) / ($altura ** 2), 2) . PHP_EOL;

if ($imc < 18.5) {
    echo "Resuldado: Abaixo do Peso" . PHP_EOL;
} elseif ($imc < 24.9) {
    echo "Resuldado: Peso Ideal" . PHP_EOL;
} else {
    echo "Resuldado: Acima do Peso" . PHP_EOL;
}
