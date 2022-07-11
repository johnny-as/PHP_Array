<?php

$alunos2021 = [
    'João',
    'Maria',
    'Ana',
    'Roberto',
    'Vinicius',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];
/*
$alunos2021 = [
    0 => 'João',
    1 => 'Maria',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Vinicius',
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane',
];*/

//$alunos2022 = array_merge($alunos2021, $novosAlunos);

//$alunos2022 = $alunos2021 + $novosAlunos;

$alunos2022 = [...$alunos2021,'Carlos Vinicius',...$novosAlunos];

array_push($alunos2022, 'Alice', 'Charlie','Bob');

$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stephane');

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);