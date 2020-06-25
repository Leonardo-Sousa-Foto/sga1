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
                <p><a class = "btn btn-primary btn-lg" href = "http://localhost/sga1/adm/acesso/login" target = "_blank"
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

        <!--Inserir espaço de segurança no site -->
        <?php
        $result_prod_home = "SELECT * FROM sts_prods_homes LIMIT 1";
        $resultado_prod_home = mysqli_query($conn, $result_prod_home);
        $row_prod_home = mysqli_fetch_assoc($resultado_prod_home);
        ?>
        <div class = "jumbotron produto">
            <div class = "container">
                <h2 class = "display-4 text-center" style = "margin-bottom: 40px;"><?php echo $row_prod_home['titulo']; ?></h2>

                <div class = "row featurette">
                    <div class = "col-md-7 seg-text">
                        <h2 class = "featurette-heading"><?php echo $row_prod_home['subtitulo']; ?></h2>
                        <p class = "lead"><?php echo $row_prod_home['descricao']; ?></p>
                    </div>
                    <div class = "col-md-5 seg-img">
                        <img class="featurette-image img-fluid mx-auto shadow-lg" width="500" height="500"
                             src="<?php echo pg; ?>/imagens1/img2.jpg" alt="<?php echo $row_prod_home['subtitulo']; ?>">

                    </div>
                </div>

            </div>
        </div>

        <!--Inserir imagem responsiva no site / Cadastro e mail -->
        <?php
        $result_forms_emails = "SELECT * FROM sts_forms_emails LIMIT 1";
        $resultado_forms_emails = mysqli_query($conn, $result_forms_emails);
        $row_forms_emails = mysqli_fetch_assoc($resultado_forms_emails);
        ?>
        <div class = "jumbotron cadastro-email" style = "background-image: url(<?php echo pg . "/imagens1/form_emails/" . $row_forms_emails['id'] . '/' . $row_forms_emails['imagem']; ?>);">
            <div class = "container">
                <div class = "email-text">
                    <h2 class = "display-4 text-center" style = "margin-bottom: 40px;"><?php echo $row_forms_emails['titulo']; ?></h2>
                    <p class = "lead text-center" style = "margin-bottom: 40px;"><?php echo $row_forms_emails['descricao']; ?></p>
                </div>

                <div class = "email-form">
                    <form action="<?php echo pg; ?>/proc_cad_lead" method="POST">
                        <div class = "form-row justify-content-center">
                            <div class = "col-sm-3 my-1">
                                <label class = "sr-only">E-mail</label>
                                <div class = "input-group mb-2 mr-sm-2">
                                    <div class = "input-group-prepend">
                                        <div class = "input-group-text">@</div>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder = "Seu e-mail">
                                </div>
                            </div>

                            <div class = "col-auto my-1">
                                <input type="submit" class="btn btn-primary mb-2" value="<?php echo $row_forms_emails['titulo_botao']; ?>" name="SendCadLead">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </main>
    <?php
    include_once 'app/sts/rodape.php';
    include_once 'app/sts/rodape_lib.php';
    ?>
    <script>
        window.sr = ScrollReveal({reset: true});
        sr.reveal('.c-left', {
            duration: 300,
            origin: 'left',
            distance: '200px'
        });
        sr.reveal('.c-center', {
            duration: 300,
            origin: 'bottom',
            distance: '200px'
        });
        sr.reveal('.c-right', {
            duration: 300,
            origin: 'right',
            distance: '200px'
        });

        sr.reveal('.seg-text', {
            duration: 500,
            origin: 'left',
            distance: '100px'
        });
        sr.reveal('.seg-img', {
            duration: 500,
            origin: 'right',
            distance: '100px'
        });
        sr.reveal('.email-text', {
            duration: 300,
            origin: 'left',
            distance: '300px'
        });
        sr.reveal('.email-form', {
            duration: 500,
            origin: 'right',
            distance: '200px'
        });


    </script>
</body>
