<?php
function sacar(array $conta, float $valorASacar) : array 
{  // essa eh uma funcao porque retorna algo (return)
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array 
{  // essa eh uma funcao porque retorna algo (return)
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos!");
    }
    return $conta;
}

function exibeMensagem($mensagem) 
{  // essa eh uma subrotina, porque nao retorna
    echo $mensagem . PHP_EOL;
}

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

$contasCorrentes ['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);  /* nessa linha eh feito uma copia para alterar 
dados */
$contasCorrentes ['153.478.678-89'] = depositar($contasCorrentes['153.478.678-89'], 500);  /* nessa linha eh feito uma copia para 
alterar dados */

foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);  // aqui a funcao esta sendo chamada
};

foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf $conta[titular] $conta[saldo]");  /* para acessar array associativo dentro de uma string, usamos a 
"string de sintaxe simples" que eh igual a esse caso", que eh tirar as aspas simples dentro do array, assim eh possivel interpolar */
};

// ou

foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");  /* o mais uzado eh esse metodo, "string de sintaxe complexa", 
    envolvendo o array associativo em chaves */
}
?>