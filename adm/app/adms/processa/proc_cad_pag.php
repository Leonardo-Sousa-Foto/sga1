<?php

if (!isset($seg)) {
exit;
}
$SendCadPag = filter_input(INPUT_POST, 'SendCadPag', FILTER_SANITIZE_STRING);
if ($SendCadPag) {
$dadosd = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dadosd);
//Validar nenhum campo vazio
$errod = false;
include_once 'lib/lib_vaziod.php';
$dadosd_validos = vaziod($dadosd);
if (!$dadosd_validos) {
$errod = true;
$_SESSION['msg'] = "<div class='alert alert-danger'>Necessário preencher todos os campos</div>";
$url_destino = pg . '/acesso/login';
header("Location: $url_destino");
}
//Houve erro em algum campo, será redirecionado para o login, não há erro no formulário - tenta cadastrar no BD
if ($errod) {
$url_destino = pg . '/cadastrar/cad_pagina';
header("Location: $url_destino");
} else {
$result_pag = "INSERT INTO adms_doc (nome_tipo, pertence, ordem, local_arquivo, created) VALUES (
                '" . $dadosd_validos['nome_tipo'] . "',
                '" . $dadosd_validos['pertence'] . "',
                '" . $dadosd_validos['numero'] . "',
                '" . $dadosd_validos['local_arquivo'] . "',
                '" . $dadosd_validos['data'] . "')";
        mysqli_query($conn, $result_pag);
        if (mysqli_insert_id($conn)) {
            $_SESSION['msg'] = "<div class = 'alert alert-success'>Documento inserido com sucesso!<button type = 'button' class = 'close' data-dismiss = 'alert' aria-label = 'Close'>
<span aria-hidden = true>&times;
</span></button></div>";
            
            $url_destino = pg . '/listar/list_pagina';
            header("Location: $url_destino");
        } else {
            $_SESSION['msg'] = "<div class = 'alert alert-danger'>Erro ao inserir o documento!<button type = 'button' class = 'close' data-dismiss = 'alert' aria-label = 'Close'>
<span aria-hidden = true>&times;
</span></button></div>";
            $url_destino = pg . '/cadastrar/cad_pagina';
            header("Location: $url_destino");
        }
    }
} else {
    $_SESSION['msg'] = "<div class = 'alert alert-danger'>Pagina não encontrada</div>";
    $url_destino = pg . '/acesso/login';
    header("Location: $url_destino");
}
