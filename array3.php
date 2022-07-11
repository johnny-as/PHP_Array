<?php

$notas = [
    'João' => 8,
    'Maria' => 9,
    'Ana' => 10,
    'Roberto' => 7,
    'Vinicius' => null
];
/*
krsort($notas);
var_dump($notas);

if (is_array($notas)){
    echo 'Sim, é um array' .PHP_EOL;
}

var_dump(array_is_list($notas));

foreach ($notas as $aluno => $nota){
    if ($aluno === 'Vinicius'){
        return true;
    }
}*/

echo 'Vinicius fez a prova:' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas));
var_dump(isset($notas['Vinicius']));

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));//verifica se exatamente igual e faz comparação com ===

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas);


// array_key_exists = Verifica se a chave existe
// in_array = verifica se o valor existe
// isse = verifica se a chave existe e não é nula