<?php

// $numero = (int) readline("Qual Tabuada deseja ver ? ");

// for ($i = 1; $i < 10; $i++) {
//     echo "$numero X $i = " . ($numero * $i) . PHP_EOL;
// }


$numero = (int) readline("Qual Tabuada deseja ver ? ");
$i = 1;
while ($i != 10) {
    echo "$numero X $i = " . ($numero * $i) . PHP_EOL;
    $i++;
}
