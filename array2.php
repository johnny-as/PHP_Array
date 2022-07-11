<?php

$notas = [
    [
        'nome' => 'Maria',
        'nota' => 10,
    ],
    [
        'nome' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'nome' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2) : int
{
    return $nota2['nota'] <=> $nota1['nota'];

}

usort($notas, 'ordenaNotas');
var_dump($notas);
