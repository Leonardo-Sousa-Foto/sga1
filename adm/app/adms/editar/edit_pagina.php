<?php
if (!isset($seg)) {
    exit;
}
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if ($id) {
    $result_pag_ed = "SELECT * FROM adms_doc WHERE id=$id LIMIT 1";
    $resultado_pag_ed = mysqli_query($conn, $result_pag_ed);
    if (($resultado_pag_ed) AND ( $resultado_pag_ed->num_rows != 0)) {

        $row_pag_ed = mysqli_fetch_assoc($resultado_pag_ed);
        include_once 'app/adms/include/head.php';
        ?>
        <body>
            <?php
            include_once 'app/adms/include/header.php';
            ?>
            <div class="d-flex">
                <?php
                include_once 'app/adms/include/menu.php';
                ?>
                <div class="content p-1">
                    <div class="list-group-item">
                        <div class="d-flex">
                            <div class="mr-auto p-2">
                                <h2 class="display-4 titulo">Editar documentos</h2>
                            </div>
                            <div class="p-2">

                                <?php
                                $btn_listd = carregar_btnd('listar/list_pagina', $conn);
                                if ($btn_listd) {
                                    echo "<a href='" . pg . "/listar/list_pagina?id=1' class='btn btn-outline-info btn-sm'>Listar</a> ";
                                }
                                ?>
                            </div>
                        </div><hr>
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <form method="POST" action="<?php echo pg; ?>/processa/proc_edit_pag">
                            <input type="hidden" name="id" value="<?php if(isset($row_pag_ed['id'])) {echo $row_pag_ed['id'];}?>">
                            <!--Dados documentos-->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><span class="text-danger">*</span>Tipo documento</label>
                                    <input name="nome_tipo" type="text" class="form-control" id="nome" 
                                           placeholder="Tipo documento" value="<?php if(isset($row_pag_ed['nome_tipo'])) {echo $row_pag_ed['nome_tipo'];}?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label><span class="text-danger">*</span>Proprietário</label>
    <input name="pertence" type="text" class="form-control" id="email" placeholder="Quem pertence?" value="<?php if(isset($row_pag_ed['pertence'])) {echo $row_pag_ed['pertence'];}?>">
                                </div>


                            </div>
                            <!--Localização, número e data -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><span class="text-danger">*</span>Localização</label>
                                    <input name="local_arquivo" type="text" class="form-control" id="endereco" placeholder="Onde está?"value="<?php if(isset($row_pag_ed['local_arquivo'])) {echo $row_pag_ed['local_arquivo'];}?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Número</label>
                                    <input name="numero" type="text" class="form-control" id="endereco" placeholder="nº" value="<?php if(isset($row_pag_ed['ordem'])) {echo $row_pag_ed['ordem'];}?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Data do documento</label>
                                    <input name="data" type="text" class="form-control" id="complemento" placeholder="Data do documento" value="<?php if(isset($row_pag_ed['created'])) {echo $row_pag_ed['created'];}?>">
                                </div>
                            </div>

                            <p>
                                <span class="text-danger">* </span>Campo obrigatório
                            </p>

                            <input name="SendEditPag" type="submit" class="btn btn-warning" value="Salvar">
                        </form>
                    </div>
                </div>
                <?php
                include_once 'app/adms/include/rodape_lib.php';
                ?>
            </div>

        </body>
        <?php
    } else {
        $_SESSION['msg'] = "<div class = 'alert alert-danger'>Erro ao editar, o documento não existe!<button type = 'button' class = 'close' data-dismiss = 'alert' aria-label = 'Close'>
<span aria-hidden = true>&times;
</span></button></div>";
        $url_destino = pg . '/listar/list_pagina';
        header("Location: $url_destino");
    }
} else {
    $_SESSION['msg'] = "<div class = 'alert alert-danger'>Erro ao editar, o documento não existe!<button type = 'button' class = 'close' data-dismiss = 'alert' aria-label = 'Close'>
<span aria-hidden = true>&times;
</span></button></div>";
    $url_destino = pg . '/listar/list_pagina';
    header("Location: $url_destino");
}




