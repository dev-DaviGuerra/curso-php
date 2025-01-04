<?php
//exercício 1
$usuarioCorreto = 'admin';
$senhaCorreta = '123456';

$usuario = 'admin';
$senha = '123456';

if ($usuarioCorreto == $usuario && $senhaCorreta == $senha) {
    echo 'Seja bem-vindo(a)';
} elseif ($usuarioCorreto == $usuario && $senhaCorreta != $senha) {
    echo 'Senha incorreta';
} elseif ($usuarioCorreto != $usuario && $senhaCorreta == $senha) {
    echo 'Nome de usuário não identificado';
}

//Exercício 2

$idade = 17;
$acompanhadoResponsável = false;

if ($idade >= 18 || $acompanhadoResponsável == true) {
    echo 'Pode entrar na festa';
} else{
    echo 'Não pode entrar na festa';
}


//Exercício 3 
$valorCompra = 200;
$vip = true;

if ($valorCompra > 200 || $vip == true){
    echo 'Você tem um desconto de 20%';
} elseif ($valorCompra >=150 && $valorCompra <= 200 ){
    echo 'Você tem um desconto de 10%';
}
