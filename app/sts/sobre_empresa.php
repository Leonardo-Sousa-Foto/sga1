<?php
if (!isset($seguranca)) {
    exit;
}
include_once 'app/sts/header.php';
?>

<body>
    <?php
    include_once 'app/sts/menu.php';
    ?>

    <main role="main">

        <br><br>
        <!--Conteudo do site/ titulo-->

        <div class="container">
            <h2 class="display-4 text-center perg-resp-text" style="margin-bottom: 50px;">Sobre a empresa SGA</h2>
            <!--img lado esquerdo-->
            <main role="main">
                <div class="container">
                    <div class="jumbotron sobre-empresa">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 text_um">
                                <h2 class="featurette-heading">Sobre empresa um.</h2>
                                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula
                                    porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                            </div>
                            <div class="col-md-5 order-md-1 img_um">
                                <img class="featurette-image img-fluid mx auto" src="imagens1/arq6.jpg"
                                     alt="sobre a empresa um">
                            </div>
                        </div>
                    </div>

                </div>
                <!--img lado direito-->
                <div class="container">
                    <div class="jumbotron sobre-empresa">
                        <div class="row featurette">
                            <div class="col-md-7 text_dois">
                                <h2 class="featurette-heading">Sobre empresa dois</h2>
                                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula
                                    porta felis
                                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                                    dapibus,
                                    tellus ac cursus commodo.</p>
                            </div>
                            <div class="col-md-5 img_dois">
                                <img class="featurette-image img-fluid mx auto" src="imagens1/arq2.jpg"
                                     alt="sobre a empresa um">
                            </div>
                        </div>
                    </div>
                </div>

                <!--img lado esquerdo-->
                <div class="container">
                    <div class="jumbotron sobre-empresa">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 text_um">
                                <h2 class="featurette-heading">Sobre empresa três.</h2>
                                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
                                    ligula
                                    porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                            </div>
                            <div class="col-md-5 order-md-1 img_um">
                                <img class="featurette-image img-fluid mx auto" src="imagens1/arq8.jpg"
                                     alt="sobre a empresa um">
                            </div>
                        </div>
                    </div>
                </div>
                <!--img lado direito-->
                <div class="container">
                    <div class="jumbotron sobre-empresa">
                        <div class="row featurette">
                            <div class="col-md-7 text_dois">
                                <h2 class="featurette-heading">Sobre empresa dois</h2>
                                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula
                                    porta felis
                                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                                    dapibus,
                                    tellus ac cursus commodo.</p>
                            </div>
                            <div class="col-md-5 img_dois">
                                <img class="featurette-image img-fluid mx auto" src="imagens1/arq3.jpg"
                                     alt="sobre a empresa um">
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <?php
            include_once 'app/sts/rodape.php';
            include_once 'app/sts/rodape_lib.php';
            ?>
            </body>

