<?php

/* require 'funcoes.php';  nesse caso o arquivo a ser importado eh indispensavel para o funcionamento desse codigo, caso nao
o encontre sera exibido uma mensagem de "Fatal Error" */
/* include 'funco4es.php';  nesse caso o arquivo a ser importado podera ser ignorado para o funcionamento desse codigo, caso nao
o encontre sera exibido uma mensagem de "Warning" */

require_once 'funcoes.php';  /* nesse caso sera importado o arquivo somente se nao ja houver sido importado, o que evita erro
por duplicacao */

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