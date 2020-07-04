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
                        <h2 class="display-4 titulo">Detalhes documentos</h2>
                    </div>
                    <div class="p-2">

                        <?php
                        $btn_listd = carregar_btnd('listar/list_pagina', $conn);
                        if ($btn_listd) {
                            echo "<a href='" . pg . "/listar/list_pagina' class='btn btn-outline-info btn-sm'>Listar</a> ";
                        }
                        $btn_editd = carregar_btnd('editar/edit_pagina', $conn);
                        if ($btn_editd) {
                            echo "<a href='" . pg . "/editar/edit_pagina?id' class='btn btn-outline-warning btn-sm'>Editar</a> ";
                        }
                        $btn_apagard = carregar_btnd('processa/apagar_pagina', $conn);
                        if ($btn_apagard) {
                            echo "<a href='" . pg . "/processa/apagar_pagina' class='btn btn-outline-danger btn-sm' data-toggle'modal' 
                                                   data-target='#apagarRegistro'>Apagar</a> ";
                        }
                        ?>

                    </div>
                </div><hr>
            </div>
            <?php
            include_once 'app/adms/include/rodape_lib.php';
            ?>
        </div>

</body>


