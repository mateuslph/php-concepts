<?php
$conta1 = [
    'titular' => 'Vinicios',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];  /* aqui como no modo tradicional cada indice tem um numero que comeca em zero e vai 
em ordem crescente */

foreach($contasCorrentes as $conta) {
    echo $conta ['titular'] . PHP_EOL;
}

$contasCorrentes = [  // aqui cada indice eh reresentado nesse exemplo por um numero de cpf
    12345678910 => $conta1, 
    13245678690 => $conta2, 
    15347867889 => $conta3
];

foreach($contasCorrentes as $conta) {  /* uma das vantagens do "foreach" em relacao ao "for" normal eh nao necessitar conhecer o 
indice */
    echo $conta ['titular'] . PHP_EOL;
};

$contasCorrentes = [
    12345678910 => $conta1, 
    13245678690 => $conta2, 
    15347867889 => $conta3
];

foreach($contasCorrentes as $cpf => $conta) {  // aqui esta associando cada chave ao seu valor
    echo $cpf . PHP_EOL;  // nessa linha exibe o cpf
};
?>