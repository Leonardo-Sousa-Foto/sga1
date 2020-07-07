<?php

if (!isset($seg)) {
    exit;
}
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!empty($id)) {
    //echo "Apagar Documentos<br>";
    $result_pag_del = "DELETE FROM adms_doc WHERE id='$id' AND ordem > '" . $_SESSION['ordem'] . "'";
    mysqli_query($conn, $result_pag_del);
    if (mysqli_affected_rows($conn)) {
        $_SESSION['msg'] = "<div class='alert alert-success'>Documento apagado com sucesso!</div>";
        $url_destino = pg . '/listar/list_pagina';
        header("Location: $url_destino");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger'>ERRO: o documento não foi apagado!</div>";
        $url_destino = pg . '/listar/list_pagina';
        header("Location: $url_destino");
    }
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger'>Pagina não encontrada!</div>";
    $url_destino = pg . '/acesso/login';
    header("Location: $url_destino");
}

