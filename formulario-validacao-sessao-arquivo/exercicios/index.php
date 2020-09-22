<?php
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION['nome'] = $nome;

if(!$_SESSION['nome']){
    header("Location: login.php");
    exit;
}

?>

<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Olá, <?php echo $nome ?></h1>
        <a href="login.php">Sair</a>
    </body>
</html>
