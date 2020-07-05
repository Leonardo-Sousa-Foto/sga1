<?php
if (!isset($seg)) {
    exit;
}
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
                        <h2 class="display-4 titulo">Cadastrar documentos</h2>
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
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form method="POST" action="<?php echo pg; ?>/processa/proc_cad_pag">
                    <!--Dados documentos-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><span class="text-danger">*</span>Tipo documento</label>
                            <input name="nome_tipo" type="text" class="form-control" id="nome" placeholder="Tipo documento">
                        </div>
                        <div class="form-group col-md-6">
                            <label><span class="text-danger">*</span>Proprietário</label>
                            <input name="pertence" type="text" class="form-control" id="email" placeholder="Quem pertence?">
                        </div>

             
                    </div>
                    <!--Localização, número e data -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><span class="text-danger">*</span>Localização</label>
                            <input name="local_arquivo" type="text" class="form-control" id="endereco" placeholder="Onde está?">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Número</label>
                            <input name="numero" type="text" class="form-control" id="endereco" placeholder="nº">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Data do documento</label>
                            <input name="data" type="text" class="form-control" id="complemento" placeholder="Data do documento">
                        </div>
                    </div>
                   
                    <p>
                        <span class="text-danger">* </span>Campo obrigatório
                    </p>

                    <input name="SendCadPag" type="submit" class="btn btn-success" value="Cadastrar">
                </form>
            </div>
        </div>
        <?php
        include_once 'app/adms/include/rodape_lib.php';
        ?>
    </div>

</body>


