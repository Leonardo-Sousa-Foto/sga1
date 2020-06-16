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
                    <h2 class="display-4 text-center" style="margin-bottom: 50px;">Contato SGA</h2>
                    <form>
                        <div class="form-row form_nome">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome</label>
                                <input type="text" class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-6 form_email">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="form-group assunto">
                            <label>Assunto</label>
                            <input type="text" class="form-control" placeholder="Assunto da mensagem">
                        </div>
                        <div class="form-group mensagem">
                            <label>Mensagem</label>
                            <textarea class="form-control" rows="5" placeholder="Mensagem"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </main>
        <?php
        include_once 'app/sts/rodape.php';
        include_once 'app/sts/rodape_lib.php';
        ?>
</body>

