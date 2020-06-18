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
    <main role = "main">

        <div id = "myCarousel" class = "carousel slide" data-ride = "carousel">
            <ol class = "carousel-indicators">
                <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
                <li data-target = "#myCarousel" data-slide-to = "1"></li>
                <li data-target = "#myCarousel" data-slide-to = "2"></li>
            </ol>
            <div class = "carousel-inner">
                <div class = "carousel-item active">
                    <img class = "first-slide img-fluid" src = "imagens1/ima1.png" class = "d-block w-60" alt = "First slide">
                    <div class = "container">
                        <div class = "carousel-caption text-left">
                            <h1 class = "d-none d-md-block"> </h1>
                            <p class = "d-none d-md-block"></p>

                        </div>
                    </div>
                </div>
                <div class = "carousel-item">
                    <img class = "second-slide img-fluid" src = "imagens1/ima2.png" class = "d-block w-60" alt = "Second slide">
                    <div class = "container">
                        <div class = "carousel-caption">
                            <h1 class = "d-none d-md-block"></h1>
                            <p class = "d-none d-md-block"></p>

                        </div>
                    </div>
                </div>
                <div class = "carousel-item">
                    <img class = "third-slide img-fluid" src = "imagens1/ima3.png" class = "d-block w-60" alt = "Third slide">
                    <div class = "container">
                        <div class = "carousel-caption text-right">
                            <h1 class = "d-none d-md-block"></h1>
                            <p class = "d-none d-md-block"></p>

                        </div>
                    </div>
                </div>
            </div>
            <a class = "carousel-control-prev" href = "#myCarousel" role = "button" data-slide = "prev">
                <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
                <span class = "sr-only">Previous</span>
            </a>
            <a class = "carousel-control-next" href = "#myCarousel" role = "button" data-slide = "next">
                <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
                <span class = "sr-only">Next</span>
            </a>
        </div>

        <!--Main jumbotron for a primary marketing message or call to action -->
        <?php
        $result_servico = "SELECT * FROM sts_servicos LIMIT 1";
        $resultado_servico = mysqli_query($conn, $result_servico);
        $row_servico = mysqli_fetch_assoc($resultado_servico);
        ?>
        <div class = "jumbotron servicos">
            <div class = "container">
                <h2 class = "display-4 text-center" style = "margin-bottom: 40px;">SGA- Sistema de gerenciamento de arquivos
                </h2>
                <p>Somos a maior rede nacional na área de gestão documental.</p>
                <p><a class = "btn btn-primary btn-lg" href = "/C:/xampp/htdocs/sga1/login.html" target = "_blank"
                      role = "button">Entrar no sistema &raquo;
                    </a></p>


                <h2 class = "display-5 text-center" style = "margin-bottom: 40px;"><?php echo $row_servico['titulo']; ?></h2>

                <!--card-deck-->
                

                <div class = "card-deck card-servicos">
                    <div class = "card c-left shadow mb-5">
                        <img src = "<?php echo pg; ?>/imagens1/arq22.jpg" class = "card-img-top" alt = "1">
                        <div class = "card-body text-center">
                            <h5 class = "card-title"><?php echo $row_servico['nome_um']; ?></h5>
                            <p class = "card-text lead"><?php echo $row_servico['descricao_um']; ?></p>

                        </div>
                    </div>
                    <div class = "card c-center shadow mb-5">
                        <img src = "<?php echo pg; ?>/imagens1/arq66.jpg" class = "card-img-top" alt = "2">
                        <div class = "card-body text-center ">
                            <h5 class = "card-title"><?php echo $row_servico['nome_dois']; ?></h5>
                            <p class = "card-text lead"><?php echo $row_servico['descricao_dois']; ?></p>

                        </div>
                    </div>
                    <div class = "card c-right shadow mb-5">
                        <img src = "<?php echo pg; ?>/imagens1/arq11.jpg" class = "card-img-top" alt = "3">
                        <div class = "card-body text-center">
                            <h5 class = "card-title"><?php echo $row_servico['nome_tres']; ?></h5>
                            <p class = "card-text lead"><?php echo $row_servico['descricao_tres']; ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Inserir espaço de produto no site -->
        <div class = "jumbotron produto">
            <div class = "container">
                <h2 class = "display-4 text-center" style = "margin-bottom: 40px;">Segurança</h2>

                <div class = "row featurette">
                    <div class = "col-md-7 seg-text">
                        <h2 class = "featurette-heading">Conformidade com a legislação</h2>
                        <p class = "lead">A SGA se preocupa com o cumprimento das normas e garante que seus documentos e
                            dados não serão violados, pois respeitamos uma rigorosa cadeia de custódia durante todas as
                            etapas do processo. <br>Confiden­cialidade durante todo processo, desde a coleta até
                            arquivamento. <br>Proteção à propriedade intelectual, contra o uso indevido de dados e roubo
                            de informações.</p>
                    </div>
                    <div class = "col-md-5 seg-img">
                        <img class = "featurette-image img-fluid mx-auto shadow-lg" width = "500" height = "500"
                             src = "imagens1/img2.jpg">
                    </div>
                </div>

            </div>
        </div>

        <!--Inserir imagem responsiva no site / Cadastro e mail -->
        <div class = "jumbotron cadastro-email" style = "background-image: url(imagens1/textura2.jpg);">
            <div class = "container">
                <div class = "email-text">
                    <h2 class = "display-4 text-center" style = "margin-bottom: 40px;">Receber novidades</h2>
                    <p class = "lead text-center" style = "margin-bottom: 40px;">A ideia é trabalhar com o nosso sistema
                        para soluçionar esses problemas, de acúmulo de documentos e a falta de segurança deles,
                        gerenciando a entrada, o arquivamento a e disponibilização digital.</p>
                </div>

                <div class = "email-form">
                    <form>
                        <div class = "form-row justify-content-center">
                            <div class = "col-sm-3 my-1">
                                <label class = "sr-only">E-mail</label>
                                <div class = "input-group mb-2 mr-sm-2">
                                    <div class = "input-group-prepend">
                                        <div class = "input-group-text">@</div>
                                    </div>
                                    <input type = "email" class = "form-control" placeholder = "Seu e-mail">
                                </div>
                            </div>

                            <div class = "col-auto my-1">
                                <button type = "submit" class = "btn btn-primary mb-2">Cadastar</button>
                            </div>
                        </div>

                    </form>
                </div>
                </main>
                <?php
                include_once 'app/sts/rodape.php';
                include_once 'app/sts/rodape_lib.php';
                ?>

                </body>
