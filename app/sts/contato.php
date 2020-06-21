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

        <main role="main">
            <div class="jumbotron contato ">
                <div class="container">
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                    <h2 class="display-4 text-center" style="margin-bottom: 50px;">Contato SGA</h2>

                    <!--var_dump($_SESSION['dados']);-->

                    <form method="POST" action="<?PHP echo pg . '/proc_cad_contato'; ?>">
                        <div class="form-row ">
                            <div class="form-group col-md-6 form_nome">
                                <label for="inputEmail4">Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php
                                if (isset($_SESSION['dados']['nome'])) {
                                    echo $_SESSION['dados']['nome'];
                                }
                                ?>" required>
                            </div>
                            <div class="form-group col-md-6 form_email">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php
                                if (isset($_SESSION['dados']['email'])) {
                                    echo $_SESSION['dados']['email'];
                                }
                                ?>" required>
                            </div>
                        </div>
                        <div class="form-group assunto">
                            <label>Assunto</label>
                            <input type="text" name="assunto" class="form-control" placeholder="Assunto da mensagem" value="<?php
                                if (isset($_SESSION['dados']['assunto'])) {
                                    echo $_SESSION['dados']['assunto'];
                                }
                                ?>" required>
                        </div>
                        <div class="form-group mensagem">
                            <label>Mensagem</label>
                            <textarea name="mensagem" class="form-control" rows="5" placeholder="Mensagem"><?php
                                if (isset($_SESSION['dados']['mensagem'])) {
                                    echo $_SESSION['dados']['mensagem'];
                                }
                                ?></textarea>
                        </div>

                        <input type="submit" name="SendCadCont" class="btn btn-primary" value="Enviar">
                    </form>
                </div>
            </div>
        </main>
<?php
unset($_SESSION['dados']);
include_once 'app/sts/rodape.php';
include_once 'app/sts/rodape_lib.php';
?>
        <script>
            window.sr = ScrollReveal({reset: true});

            sr.reveal('.form_nome', {
                duration: 200,
                origin: 'left',
                distance: '500px'
            });
            sr.reveal('.form_email', {
                duration: 200,
                origin: 'right',
                distance: '500px'
            });
            sr.reveal('.assunto', {
                duration: 200,
                origin: 'left',
                distance: '500px'
            });
            sr.reveal('.mensagem', {
                duration: 200,
                origin: 'right',
                distance: '500px'
            });


        </script>
</body>

