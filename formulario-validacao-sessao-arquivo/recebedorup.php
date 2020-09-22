<?php
echo '<pre>';
print_r( $_FILES );

if(in_array($_FILES['arquivo']['type'], array('image/jpeg', 'image/jpg', 'image/png'))){
    $nome = md5(time().rand(0, 1000)).'.jpg';

    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);
    echo 'arquivo salvo com sucesso!';
}else{
    echo 'arquivo não permitido';
}
