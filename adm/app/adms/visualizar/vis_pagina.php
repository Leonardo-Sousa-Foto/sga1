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

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $result_pagina = "SELECT * FROM adms_doc WHERE ordem >= '" . $_SESSION['ordem'] . "
        'AND id=$id ORDER BY ordem ASC LIMIT 1";
        $resultado_pagina = mysqli_query($conn, $result_pagina);
        ?>
        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-4 titulo">Detalhes documentos</h2>
                    </div>
                    <div class="p-2">

                        <?php
                        $btn_listd = carregar_btnd('listar/list_pagina', $conn);
                        if ($btn_listd) {
                            echo "<a href='" . pg . "/listar/list_pagina?id=1' class='btn btn-outline-info btn-sm'>Listar</a> ";
                        }
                        $btn_editd = carregar_btnd('editar/edit_pagina', $conn);
                        if ($btn_editd) {
                            echo "<a href='" . pg . "/editar/edit_pagina?id=1' class='btn btn-outline-warning btn-sm'>Editar</a> ";
                        }
                        $btn_apagard = carregar_btnd('processa/apagar_pagina', $conn);
                        if ($btn_apagard) {
                            echo "<a href='" . pg . "/processa/apagar_pagina' class='btn btn-outline-danger btn-sm' data-toggle'modal' 
                                                   data-target='#apagarRegistro'>Apagar</a> ";
                        }
                        ?>
                    </div>
                </div><hr>
                <?php
                if (($resultado_pagina) AND ( $resultado_pagina->num_rows != 0)) {

                    $row_pagina = mysqli_fetch_assoc($resultado_pagina);
                    ?>
                    <dl class="row">
                        <dt class="col-sm-3">ID</dt>
                        <dd class="col-sm-9"><?php echo $row_pagina['id']; ?></dd>

                        <dt class="col-sm-3">Tipo</dt>
                        <dd class="col-sm-9"><?php echo $row_pagina['nome_tipo']; ?></dd>

                        <dt class="col-sm-3">Proprietário</dt>
                        <dd class="col-sm-9"><?php echo $row_pagina['pertence']; ?></dd>

                        <dt class="col-sm-3">Número</dt>
                        <dd class="col-sm-9"><?php echo $row_pagina['ordem']; ?></dd>

                        <dt class="col-sm-3">Localização</dt>
                        <dd class="col-sm-9"><?php echo $row_pagina['local_arquivo']; ?></dd>

                        <dt class="col-sm-3 text-truncate">Data do documento</dt>
                        <dd class="col-sm-9"><?php echo date('d/m/Y H:i;s', strtotime($row_pagina['created'])); ?></dd>
                    </dl>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Nenhum registro encontrado!
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php
            include_once 'app/adms/include/rodape_lib.php';
            ?>
        </div>

</body>


