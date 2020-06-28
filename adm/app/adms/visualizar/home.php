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

        <!--Dashboard-->
        <div class="content p1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-4 titulo">Dashboard</h2>
                    </div>
                </div>
                <div class="row mb-3">

                    <!--1º cartão do dashboard-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-success text-white">                               
                            <div class="card-body">
                                <i class="fa fa-users fa-3x"></i>
                                <h6 class="card-title">Usuários</h6>
                                <h2 class="lead">147</h2>
                            </div>
                        </div>
                    </div>
                    <!--2º cartão do dashboard-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-danger text-white">                               
                            <div class="card-body">
                                <i class="fa fa-file fa-3x"></i>
                                <h6 class="card-title">Artigo</h6>
                                <h2 class="lead">63</h2>
                            </div>
                        </div>
                    </div>
                    <!--3º cartão do dashboard-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-warning text-white">                               
                            <div class="card-body">
                                <i class="fa fa-eye fa-3x"></i>
                                <h6 class="card-title">Visitas</h6>
                                <h2 class="lead">648</h2>
                            </div>
                        </div>
                    </div>

                    <!--4º cartão do dashboard-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-info text-white">                               
                            <div class="card-body">
                                <i class="fa fa-comments fa-3x"></i>
                                <h6 class="card-title">Usuários</h6>
                                <h2 class="lead">49</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php
        include_once 'app/adms/include/rodape_lib.php';
        ?>
    </div>

</body>


