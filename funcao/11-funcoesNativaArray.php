<?php
$lista = ['nome1', 'nome2', 'nome3', 'nome4'];
$lista2 = ['nome2', 'nome3', 'nome4'];
$numero = [1,2,10,50,30,4,5];

//conta o número de elementos no array
echo "total: ".count($lista)."<br/>";

// verifica a diferença entre dois arrays e retorna um array com os elementos diferentes
print_r(array_diff($lista, $lista2)."<br/>");

// retorna um array filtrado de acordo com a condição
$filtrados = array_filter($numero, function($item){
  if($item < 30)
    return true;
  else
    return false;
});

print_r($filtrados);

// retorna um novo array de acordo com a condição
$dobrados = array_map(function($item){
    return $item * 2;
}, $numero);

//remove o ultimo item do array
array_pop($numero);
// remove o primeiro item do array
array_shift($numero);

// verifica se existe um elemento no array
if(in_array(10, $numero))
  echo "EXISTE";
else
  echo "NÃO EXISTE";

// retorna a posição de um elemento no array
$posi = array_search(10, $numero);
// ordena array
sort($numero);
//ordem decrecente
rsort($numero);
//ordena e matem a chave  
asort($numero);
