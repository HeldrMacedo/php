<?php
 $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

 $texto = file_get_contents('nome.txt');
 $texto .= "\n<li>".$nome."</li>";

 file_put_contents('nome.txt',$texto);
 header("Location: index.php");
?>
