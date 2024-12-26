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
$cores[] = 'vermelho';
array_shift($cores);
var_dump($cores);

$preços = ["Lápis" => 3, "Caneta" => 5, "Borracha" => 4];
$preços["Borracha"] = $preços["Borracha"] + 10;
$preços["Lápis"] = $preços["Lápis"] - 1;
print_r($preços);




