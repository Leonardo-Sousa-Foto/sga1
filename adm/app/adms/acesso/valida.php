<?php

$SendLogin = filter_input(INPUT_POST, 'SendLogin', FILTER_SANITIZE_STRING);
if($SendLogin){
    echo "validar";
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>Pagina não encontrada</div>";
    $url_destino = pg.'/acesso/login';
    header("Location: $url_destino");
}