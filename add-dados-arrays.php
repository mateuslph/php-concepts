<?php
$idadeList = [21, 23, 19, 25, 30, 41, 18];

// existe tres maneira para adicionar idade a esse array

$idadeList[7] = 20;  // "7" porque eh na setima posicao a seguinte disponiel
foreach($idadeList as $idade) {
    echo $idade . PHP_EOL;
};

$idadeList[count($idadeList)] = 24;  /* "count($idadeList)" porque contando o numero de indices mais o indice zero, da o 
proximo indice */
foreach($idadeList as $idade) {
    echo $idade . PHP_EOL;
};

$idadeList[] = 20;  // "[]" array vazio, porque quando nao tem indice eh adicionado seguindo o ultimo valor de indice
foreach($idadeList as $idade) {
    echo $idade . PHP_EOL;
};

$contasCorrentes = [  // no caso se os indices forem strings
    '123.456.789-10' => [
        'titular' => 'Vinicios',
        'saldo' => 1000
    ],
    '132.456.786-90' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '153.478.678-89' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes ['156.478.098-89'] = [  /* aqui esta adicionando uma nova conta, no caso de strings, tem que descrever a string 
no espaco do array que eh mostrado nessa linha */
    'titular' => 'Claudia',
    'saldo' => 2000
];

unset($contasCorrentes['132.456.786-90']);  // essa eh a forma de excluir uma conta (exemplo daqui conta bancaria)

foreach($contasCorrentes as $cpf => $conta) {
    echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}

foreach($contasCorrentes as $cpf => $conta) {  /* uzar a lista (list) para associar o indice a uma variavel, com a lista evita 
que os dados complexos fiquem exposto na saida de tela */
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    echo $cpf . $titular . $saldo . PHP_EOL;
}

// ou

foreach($contasCorrentes as $cpf => $conta) {  /* uzar a lista (list) para associar o indice a uma variavel, essa eh uma 
versao mais enchuta da "list" */
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo $cpf . $titular . $saldo . PHP_EOL;
}
?>