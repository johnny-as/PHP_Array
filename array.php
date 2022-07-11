<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas: ' .PHP_EOL;
var_dump($notas);

echo 'Ordenadas: ' .PHP_EOL;
var_dump($notasOrdenadas);

$numeros = [
    'um',
    'tres',
    'dois'
];

$Ordenadas = $numeros;
sort($Ordenadas);

echo 'Desordenadas: ' .PHP_EOL;
var_dump($numeros);

echo 'Ordenadas: ' .PHP_EOL;
var_dump($Ordenadas);