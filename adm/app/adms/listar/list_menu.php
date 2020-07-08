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
                        <h2 class="display-4 titulo">Relatório de documentos</h2>
                    </div>
                    <div class="p-2">

                        <?php
                        $btn_cad = carregar_btnd('cadastrar/cad_pagina', $conn);
                        if ($btn_cad) {
                            echo "<a href='" . pg . "/listar/list_menu' class='btn btn-outline-success btn-sm'>Imprimir</a>";
                        }
                        ?>
                    </div>
                </div>
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                //Receber o numero da pagina
                $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
                $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

                //Setar a quantidade de intens por pagina
                $qnt_result_pg = 15;

                //Calcular o incio visualização
                $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
                $result_pagina = "SELECT * FROM adms_doc WHERE ordem >= '" . $_SESSION['ordem'] . "' ORDER BY ordem ASC LIMIT $inicio, $qnt_result_pg ";
                $resultado_pagina = mysqli_query($conn, $result_pagina);
                if (($resultado_pagina) AND ( $resultado_pagina->num_rows != 0)) {
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                    <th class="d-none d-lg-table-cell">Quem pertence</th>
                                    <th class="d-none d-sm-table-cell">Numero</th>                                    
                                    <th class="d-none d-lg-table-cell">Local do doc</th>
                                    <!--<th class="text-center">Ações</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row_pagina = mysqli_fetch_assoc($resultado_pagina)) {
                                    ?>
                                    <tr>
                                        <th><?php echo $row_pagina['id']; ?></th>
                                        <td><?php echo $row_pagina['nome_tipo']; ?></td>
                                        <td class="d-none d-lg-table-cell"><?php echo $row_pagina['pertence']; ?></td>
                                        <td class="d-none d-sm-table-cell"><?php echo $row_pagina['ordem']; ?></td>
                                        <td class="d-none d-lg-table-cell"><?php echo $row_pagina['local_arquivo']; ?></td>
                                        <td class="text-center">
                                            <!--<span class="d-none d-md-block">
                                                <?php
                                                /*$btn_visd = carregar_btnd('visualizar/vis_pagina', $conn);
                                                if ($btn_visd) {
                                                    echo "<a href='" . pg . "/visualizar/vis_pagina?id=" . $row_pagina['id'] . "' class='btn btn-outline-primary btn-sm'>Visualizar</a> ";
                                                }
                                                $btn_editd = carregar_btnd('editar/edit_pagina', $conn);
                                                if ($btn_editd) {
                                                    echo "<a href='" . pg . "/editar/edit_pagina?id=" . $row_pagina['id'] . "' class='btn btn-outline-warning btn-sm'>Editar</a> ";
                                                }
                                                $btn_apagard = carregar_btnd('processa/apagar_pagina', $conn);
                                                if ($btn_apagard) {
                                                    echo "<a href='" . pg . "/processa/apagar_pagina?id=" . $row_pagina['id'] . "' class='btn btn-outline-danger btn-sm'>Apagar</a> ";
                                                }*/
                                                ?>
                                            </span>-->
                                            <div class="dropdown d-block d-md-none">
                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ações
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                                    <?php
                                                    if ($btn_visd) {
                                                        echo "<a class='dropdown-item' href='" . pg . "/visualizar/vis_pagina?id=" . $row_pagina['id'] . "'>Visualizar</a>";
                                                    }
                                                    if ($btn_editd) {
                                                        echo "<a class='dropdown-item' href='" . pg . "/editar/edit_pagina?id=" . $row_pagina['id'] . "'>Editar</a>";
                                                    }
                                                    if ($btn_apagard) {
                                                        echo "<a class='dropdown-item' href='" . pg . "/processa/apagar_pagina?id=" . $row_pagina['id'] . "'>Apagar</a>";
                                                    }                                                 
                                                    ?>                                                                                                        
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>
                        </table>
                        <!--Paginação-->
                        <?php
                        $result_pg = "SELECT COUNT(id) AS num_result FROM adms_doc WHERE ordem >= '" . $_SESSION['ordem'] . "' ";
                        $resultado_pg = mysqli_query($conn, $result_pg);
                        $row_pg = mysqli_fetch_assoc($resultado_pg);
                        //echo $row_pg['num_result'];
                        //Quantidade de pagina
                        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
                        //Limitar antes e depois
                        $max_links = 2;
                        echo"<nav aria-label='paginacao-blog'>";
                        echo"<ul class='pagination pagination-sm justify-content-center'>";
                        echo"<li class='page-item'>";
                        echo"<a class='page-link' href='" . pg . "/listar/list_menu?pagina=1' tabindex='-1'>Primeira</a>";
                        echo"</li>";

                        for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
                            if ($pag_ant >= 1) {
                                echo "<li class='page-item'><a class='page-link' href='" . pg . "/listar/list_menu?pagina=$pag_ant'>$pag_ant</a></li>";
                            }
                        }

                        echo"<li class='page-item active'>";
                        echo"<a class='page-link' href='#'>$pagina</a>";
                        echo "</li>";

                        for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
                            if ($pag_dep <= $quantidade_pg) {
                                echo "<li class='page-item'><a class='page-link' href='" . pg . "/listar/list_menu?pagina=$pag_dep'>$pag_dep</a></li>";
                            }
                        }

                        echo"<li class='page-item'>";
                        echo"<a class='page-link' href='" . pg . "/listar/list_menu?pagina=$quantidade_pg'>Última</a>";
                        echo"</li>";
                        echo"</ul>";
                        echo"</nav>";
                        ?>

                    </div>
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
        </div>
        <?php
        include_once 'app/adms/include/rodape_lib.php';
        ?>
    </div>

</body>


