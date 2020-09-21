<?php
    session_start();

    if($_SESSION['aviso']){
        echo $_SESSION['aviso'];
        $_SESSION['aviso'] = '';
    }
?>

<form method="POST" action="recebedor.php">
    <label for="">
        Nome
        <br/>
        <input type="text" name="nome" />    
    </label>
    <br/>
    <br/>
    <label for="">
        Email:
        <br/>
        <input type="text" name="email" />    
    </label>
    <br/>
    <br/>
    <label for="">
        Idade:
        <br/>
        <input type="text" name="idade" />
    </label>
    <br/>
    <br/>
    <input type="submit" value="Enviar"/>
</form>