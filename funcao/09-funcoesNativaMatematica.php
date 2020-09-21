<?php

//transforma numero negativo em positivo
$numero =  -8.4;
echo abs($numero);

// pi 
echo pi();


//arredonda um número pra baixo
$n1 = 2.7;
echo floor($n1);

// arredonda pra cima
$n2 = 2.7;
echo ciel($n2);

// arredonda o número dependo se é maior ou não que  5
$n4 = 3.4;
echo round($n4);

// gera números aleatório 
$n5 = rand(3,9);
echo $n5;

// retorna o maior número de uma lista
$lista = [1,4,9,8];
echo max($lista);

// retorna o menor número de uma lista
$lista = [1,4,9,8];
echo min($lista);