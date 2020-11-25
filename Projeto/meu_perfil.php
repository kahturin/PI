<?php
require 'config/session.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
    <link rel="shortcut icon" href="./images/logo.png" />
    <title>Página Principal</title>
</head>

<body class="imagem-fundo -lg d-flex align-items-center">
    <header>
    </header>
    <main>
        <div class="vertical-nav" id="sidebar">
            <div class="menu py-4 px-3 mb-4">
                <div class="media d-flex align-items-center"><img src="images/hulk.jpg" width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                    <div class="media-body">
                        <h4 class="m-0">
                            <?php
                            $nome_usuario = $_SESSION['nome'];
                            echo " <a href='meu_perfil.php'> $nome_usuario </a>";
                            ?>
                        </h4>
                        <p class="font-weight-light text-muted mb-0">
                        </p>
                    </div>
                </div>
            </div>
            <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Página Inicial</p>
            <ul class="nav flex-column bg-light mb-0">
                <li class="nav-item">
                    <a href="home.php" class="nav-link text-white font-italic">
                        <i class="fa fa-th-large mr-3 fa-fw" style="color:white"></i>
                        Página Principal
                    </a>
                </li>
                <li class="nav-item">
                    <a href="meus_filmes.php" class="nav-link text-white font-italic">
                        <i class="fa fa-th-large mr-3 fa-fw" style="color:white"></i>
                        Meus Filmes
                    </a>
                </li>
                <li class="nav-item">
                    <a href="minhas_series.php" class="nav-link text-white font-italic">
                        <i class="fa fa-th-large mr-3 fa-fw" style="color:white"></i>
                        Minhas Séries
                    </a>
                </li>
            </ul>
            <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Entretenimento</p>
            <ul class="nav flex-column bg-white mb-0">
                <li class="nav-item">
                    <a href="estatisticas.php" class="nav-link text-white font-italic">
                        <i class="fa fa-cubes mr-3 fa-fw" style="color:white"></i>
                        Estatísticas
                    </a>
                </li>
                <li class="nav-item">
                    <a href="adicionar_filmes.php" class="nav-link text-white font-italic">
                        <i class="fa fa-cubes mr-3 fa-fw" style="color:white"></i>
                        Adicionar Filmes
                    </a>
                </li>
                <li class="nav-item">
                    <a href="adicionar_series.php" class="nav-link text-white font-italic">
                        <i class="fa fa-cubes mr-3 fa-fw" style="color:white"></i>
                        Adicionar Séries
                    </a>
                </li>
                <li class="nav-item" style=" padding-top: 75%;">
                    <a href="config/deslogar.php" class="nav-link text-white font-italic">
                        <i class="fa fa-sign-out" style="color:white"></i>
                        Sair
                    </a>
                </li>
            </ul>
        </div>
        <div class="page-content p-5" id="content">
            <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Alternar</small></button>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <form action='config/inserirFoto.php' method='post' encType="multipart/form-data">
                <div class="box_filmes">
                    <section class="upload_capa">
                        <div class="form-group">
                            <img class="preview-img">
                            <div class="file-chooser fileUpload">
                                <span>Foto de Perfil</span>
                                <input type="file" class="upload" accept="image/*" name="arquivo" id="fotoUsuario">
                            </div>
                            <script>
                                const $ = document.querySelector.bind(document);
                                const previewImg = $('.preview-img');
                                const fileChooser = $('.file-chooser');
                                fileChooser.onchange = e => {
                                    const fileToUpload = e.target.files.item(0);
                                    const reader = new FileReader();

                                    // evento disparado quando o reader terminar de ler 
                                    reader.onload = e => previewImg.src = e.target.result;

                                    // solicita ao reader que leia o arquivo 
                                    // transformando-o para DataURL. 
                                    // Isso disparará o evento reader.onload.
                                    reader.readAsDataURL(fileToUpload);
                                };
                            </script>
                        </div>
                    </section>
                    <section class="filmes_split">
                        <section class="section_filmes">
                            <div class="form-group">
                                <label for="nomeFilme" class="text-white">Nome Completo: </label>
                                <a>
                                    <?php
                                        echo " <p> $nome_usuario </p>";
                                    ?>
                                </a>
                            </div>
                        </section>
                        <section class="section_filmes">
                            <div class="form-group">
                                <label for="duracaoFilme" class="text-white">Email:</label>
                                <?php
                                    $emailUsuario = $_SESSION['email'];
                                    echo " <p> $emailUsuario </p>";
                                ?>
                            </div>
                        </section>
                        <section class="section_filmes">
                            <div class="form-group">
                                <ul class="navbar-nav mr-auto">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#alterarSenha">Alterar Senha</a>
                                    </li>
                                </ul>
                                <div class="modal fade" id="alterarSenha" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content bg-dark text-white">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Alterar Senha</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="config/alterarSenha" method="POST">
                                                    <label for="senha" class="pt-3">Senha Atual</label>
                                                    <input id="senha" name="senha" class="form-control mr-sm-2" type="password" placeholder="Sua senha" required>
                                                    <label for="senha" class="pt-3"> Nova Senha</label>
                                                    <input id="senha" name="novaSenha" class="form-control mr-sm-2" type="password" placeholder="Sua senha" required>
                                                    <label for="confirmaSenha" class="pt-3">Confirmar Nova Senha</label>
                                                    <input id="confirmaSenha" name="confirmaNovaSenha" class="form-control mr-sm-2" type="password" placeholder="Confirme sua senha" required>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="btnCadastrar" class="btn btn-primary">Cadastrar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>

                       
                    
                </form>
                <input type="submit" value="Salvar">

    </main>
    <footer>
    </footer>
</body>

</html>