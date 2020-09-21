<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

//filter_var(variável, filtro); valida uma variável

if($nome && $email){

    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);

    //$_COOKIE['nome']; verificar valor do cookie
    //setcookie('nome', time() - 3600); apagar cookie

    echo 'NOME '.$nome."<br/>";
    echo 'EMAIL '.$email."<br/>";
    echo 'IDADE: '.$idade;

}else{

    $_SESSION['aviso'] = 'Meu aviso';

    header("Location: index.php");
    exit;

}