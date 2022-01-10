<?php
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '132.456.786-90' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '153.478.678-89' => [
        'titular' => 'Vinicios',
        'saldo' => 100
    ]
];

$contasCorrentes ['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

$contasCorrentes ['153.478.678-89'] = depositar($contasCorrentes['153.478.678-89'], 500);

titularComLetrasMaiusculas($contasCorrentes['153.478.678-89']);

foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}"); 
}
?>