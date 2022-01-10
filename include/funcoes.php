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
?>