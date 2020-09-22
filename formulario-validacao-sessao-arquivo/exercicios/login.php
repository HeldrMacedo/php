<?php
session_start();
 ?>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Qual seu nome? </h2>
        <form  action="index.php" method="post">
            <input type="text" name="nome" value="">
            <button type="submit" name="button">Enviar</button>
        </form>
    </body>
</html>
