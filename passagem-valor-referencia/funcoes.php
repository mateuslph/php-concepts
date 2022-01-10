<?php
function sacar(array $conta, float $valorASacar) : array 
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array 
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos!");
    }
    return $conta;
}

function exibeMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}
  
/*
Nota: a função mb_strtoupper faz parte de uma biblioteca do PHP que talvez precise ser habilitada. Para isso, você precisará 
acessar o arquivo php.ini no diretório em que o PHP foi instalado. Nesse arquivo, busque (atalho "Ctrl + F") por "mbstring" 
e retire o ponto e vírgula (;) que vem antes de "extension=mbstring". Em seguida, busque por "extension_dir" e retire o 
ponto-e-vírgula antes da linha "extension_dir = "ext".

A função mb_strtoupper() faz parte da biblioteca mbstring, que trata caracteres complexos. Se você não quiser habilitar essa 
extensão pois resolveu compilar o PHP, como recomendei, e não quer recompilar, pode chamar a função strtoupper(), que já vem 
instalada no PHP.
*/

// passagem de variavel por parametro

/* function titularComLetrasMaiusculas(array $conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
} */

// passagem de variavel por referencia, eh apenas acrescentado um "&" antes da variavel

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

?>