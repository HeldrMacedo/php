<?php

// retira os espaços
$nome = "   Helder   ";
echo trim($nome);

// conta os caracteres
echo "Helder: ".strlen($nome);

// letras minúsculas
echo strtolower($nome);
// letras minúsculas
echo strtoupper($nome);

// replace - substitui uma string
$nomeAlterado = str_replace("  ", "Marcedo",$nome);

// retorna uma parte da string
substr($nome,0,5);

// retorna a posição de uma string
strpos($nome, "e");

// deixar a primeira letra maiúscula 
ucfirst($nome);

// deixa a primeira letra de cada palavra maiúscula
ucwords($nome);

// transforma uma string em array
explode(' ',$nome);
// transforma array em string
implode(' ',$nome);

// formata número
$number = 12913.12;
number_format($number, 2 ,',','.');