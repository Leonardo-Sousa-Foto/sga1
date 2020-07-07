<?php

if (!isset($seg)) {
    exit;
}
$SendEditPag = filter_input(INPUT_POST, 'SendEditPag', FILTER_SANITIZE_STRING);
if ($SendEditPag) {
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
    //Validar nenhum campo vazio
    $erro = false;
    include_once 'lib/lib_vazio.php';
    $dados_validos = vazio($dados);
    if (!$dados_validos) {
        $erro = true;
        $_SESSION['msg'] = "<div class='alert alert-danger'>Necessário preencher todos os campos para editar o documento!</div>";
    }
    //Houve erro em algum campo, será redirecionado para o login, não há erro no formulário - tenta cadastrar no BD
    if ($erro) {
        $url_destino = pg . '/editar/edit_pagina?id='.$dados['id'];
        header("Location: $url_destino");
    } else {
        
    $result_pag = "UPDATE adms_doc SET local_arquivo='".$dados_validos['local_arquivo']."' WHERE id='".$dados_validos['id']."'";
        mysqli_query($conn, $result_pag);
        if (mysqli_affected_rows($conn)) {
            $_SESSION['msg'] = "<div class='alert alert-success'>Documento alterado com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button></div>";
            $url_destino = pg . '/listar/list_pagina';
            header("Location: $url_destino");
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao alterar o documento!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button></div>";
            $url_destino = pg . '/listar/list_pagina';
            header("Location: $url_destino");
        }
    }
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger'>Pagina não encontrada</div>";
    $url_destino = pg . '/acesso/login';
    header("Location: $url_destino");
}
