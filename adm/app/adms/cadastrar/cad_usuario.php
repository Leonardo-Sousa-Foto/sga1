<?php
if(!isset($seg)){
    exit;
}
echo "Cadastrar usuário<br>";
?>

<body>
    <?php
    include_once 'app/adms/include/header.php';
    ?>
    <div class="d-flex">
        <?php
        include_once 'app/adms/include/menu.php';

        echo "listar usuarios<br>";
        include_once 'app/adms/include/rodape_lib.php';
        ?>
    </div>

</body>
