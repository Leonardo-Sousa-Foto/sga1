<?php
$result_user_hd = "SELECT id, nome, imagem FROM adms_usuarios WHERE id='".$_SESSION['id']."' LIMIT 1";
$resultado_user_hd = mysqli_query($conn, $result_user_hd);
$row_user_hd = mysqli_fetch_assoc( $resultado_user_hd);
$nome = explode(" ", $row_user_hd['nome']);
$prim_nome = $nome[0];
?>

<!--Barra cima- Navbar-->
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="sidebar-toggle text-light mr-3"><span class="navbar-toggler-icon"></span></a>
    <a class="navbar-brand" href="#">SGA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" 
                   data-toggle="dropdown">
                    <img class="rounded-circle" src="<?php echo pg; ?>/assets/imagens/icone/usuario.png" width="32" height="32">
                    &nbsp;<span class="d-none d-sm-inline"><?php echo $prim_nome; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fa fa-user fa-fw"></i>Perfil</a>
                    <a class="dropdown-item" href="<?php echo pg; ?>/acesso/sair"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                </div>
            </li>
        </ul>
    </div>
</nav>