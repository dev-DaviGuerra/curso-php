<?php
$Cidades = ["São Paulo", "Recife", "Bauneário Camboriú", "Rio de Janeiro", "Vila Velha"];
echo $Cidades[2];

$Alunos = [
    'Davi' => [
        'Idade' => 18
    ],
    'João' => [
        'Idade' => 16
    ],
    'Maria' => [
        'Idade' => 17
    ]
];
var_dump($Alunos['João']['Idade']);

$cores = ['azul', 'amarelo', 'verde'];
array_push($cores, 'vermelho');
array_shift($cores);
var_dump($cores);

$preços = ['Lápis' => 3, 'Caneta' => 5, 'Borracha' => 4];
$preços['Borracha'] = $precos['Borracha'] + 10;
$preços['Lápis'] = $precos['Lápis'] - 1;
print_r($preços);




