<?php

$notasBimestre1 = [
    'João' => 8,
    'Maria' => 9,
    'Ana' => 10,
    'Roberto' => 7,
    'Vinicius' => 6
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7
];

/*var_dump(array_diff($notasBimestre1, $notasBimestre2));
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));*/


$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);


var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));