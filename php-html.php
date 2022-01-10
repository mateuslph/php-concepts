<?php
$idadeList = [21, 23, 19, 25, 30, 41, 18];

$idadeList[7] = 20;
foreach($idadeList as $idade) {
    echo $idade . '<br>';
};

$idadeList[count($idadeList)] = 24;
foreach($idadeList as $idade) {
    echo $idade . '<br>';
};

$idadeList[] = 20;
foreach($idadeList as $idade) {
    echo $idade . '<br>';
};

$contasCorrentes = [
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

$contasCorrentes ['156.478.098-89'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li> Titular: $titular . Saldo: $saldo</li>";
}

unset($contasCorrentes['132.456.786-90']);

foreach($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    echo $cpf . $titular . $saldo . '<br>';
}

echo '<ul>';
foreach($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo '</ul>';
?>
<html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf8">
    <title>Documento</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo'] ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>