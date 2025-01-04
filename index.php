<?php
// Operadores Lógicos

//&& Operador lógico E
// Verifica se ambas condições são verdadeiras

$idade = 18;
$temCarteira = false;

if ($idade >= 18 && $temCarteira) {
    echo 'Você pode dirigir no Brasil';
} else {
    echo 'Você NÃO pode dirigir no Brasil';
}

//|| Operador lógico OU
$idade = 18;
$temCarteira = false;
if ($idade>=18 || $temCarteira == true){
    echo 'Você pode dirigir uma nave espacial';
} else {
    echo "Você não pode dirigir uma nave espacil";
}
// ! Operador lógico de negação
$temCarteira = 'ppd';

// 0 == false
// 1 == true
//null = nulo, ou vazio

if ($temCarteira === false) {
    echo "Você não pode dirigir";
} 

elseif($temCarteira === true) {
    echo "Você pode dirigir";
}
elseif($temCarteira === "ppd"){
    echo "Você pode dirigir com cuidado";
}

else {
    echo "Não sei se você pode dirigir";
}