<?php

// echo "Numeros Impares Até 100 : " . PHP_EOL;
// $limite = false;
// while ($limite != true) {
//     $contador++;
//     echo $impar = $contador % 2 != 0 ? $contador . ' - ' : null;
//     if ($contador === 100) {
//         $limite = true;
//     }
// }

echo "Numeros Impares Até 100 : " . PHP_EOL;
for ($i = 0; $i <= 100; $i++) {
    echo $impar = $i % 2 === 1 ? $i . ' - ' : null;
}
