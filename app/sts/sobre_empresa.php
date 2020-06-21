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
                                <h2 class="featurette-heading">Sobre empresa SGA</h2>
                                <p class="lead">A SGA Arquivos é uma das principais empresas brasileiras no gerenciamento de documentos. Criada no Brasil e evoluindo em 
função das características e necessidades do nosso mercado, desenvolvemos e aperfeiçoamos serviços que atendem com precisão 
à médias e grandes empresas do país.</p>
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
                                <h2 class="featurette-heading">Sobre o software.</h2>
                                <p class="lead">É um software que visa organizar de forma segura e útil os arquivos 
                                    físicos e digitalizado de empresas que possuem este serviço.<br>O desafio é que muitos documentos acabam se perdendo e muitas vezes 
são  extraviados e o sistema solução esse problema. </p>
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
                                <h2 class="featurette-heading">O que oferecemos.</h2>
                                <p class="lead">Oferecemos soluções completas para o controle e gerenciamento de informações e documentos, através de serviços focados na organização, digitalização, 
gerenciamento e armazenagem de arquivos, em sua forma física e eletrônica.</p>
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
                                <h2 class="featurette-heading">Conformidade com a legislação.</h2>
                                <p class="lead">A SGA Arquivos se preocupa com o cumprimento das normas e 
                                    garante que seus documentos e dados não serão violados, pois respeitamos uma rigorosa cadeia de custódia 
                                    durante todas as etapas do processo;</p>
                            </div>
                            <div class="col-md-5 img_dois">
                                <img class="featurette-image img-fluid mx auto" src="imagens1/arq12.jpg"
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
                <script>
        window.sr = ScrollReveal({ reset: true });
        sr.reveal('.text_um', {
            duration: 500,
            origin: 'right',
            distance: '500px'
        });
        sr.reveal('.img_um', {
            duration: 500,
            origin: 'left',
            distance: '500px'
        });
        sr.reveal('.text_dois', {
            duration: 500,
            origin: 'left',
            distance: '500px'
        });
        sr.reveal('.img_dois', {
            duration: 500,
            origin: 'right',
            distance: '500px'
        });

    </script>
            </body>

