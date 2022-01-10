<?php
$string = 'Testes de integração com PHP';

echo strlen($string) . PHP_EOL;  /* nessas duas linhas a contagem de caracteres nao esta certa, porque caracteres com acento e
"ç", etc tem mais de um byte, chamado de "caractere multibyte" */
echo strtoupper($string);

/* Obs.: para que essa funcao funcione eh nescessario agir como descrito no exemplo a seguir:

Nota: a função mb_strtoupper faz parte de uma biblioteca do PHP que talvez precise ser habilitada. Para isso, você precisará 
acessar o arquivo php.ini no diretório em que o PHP foi instalado. Nesse arquivo, busque (atalho "Ctrl + F") por "mbstring" 
e retire o ponto e vírgula (;) que vem antes de "extension=mbstring". Em seguida, busque por "extension_dir" e retire o 
ponto-e-vírgula antes da linha "extension_dir = "ext".

A função mb_strtoupper() faz parte da biblioteca mbstring, que trata caracteres complexos. Se você não quiser habilitar essa 
extensão pois resolveu compilar o PHP, como recomendei, e não quer recompilar, pode chamar a função strtoupper(), que já vem 
instalada no PHP.
*/

echo mb_strlen($string) . PHP_EOL;  /* para solucionar esse problemas usamos a funcao da extencao chamada "mbstring", acrscentando
"mb_" antes da funcao */
echo mb_strtoupper($string);
?>