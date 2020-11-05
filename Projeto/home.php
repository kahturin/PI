<?php
    require './config/session.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
    <link rel="shortcut icon" href="./images/logo.png" />
    <title>Página Principal</title>
</head>

<body class="imagem-fundo banner-lg d-flex align-items-center">

    <header>

    </header>

    <main>
        <div class="vertical-nav" id="sidebar">
            <div class="menu py-4 px-3 mb-4">
                <div class="media d-flex align-items-center"><img
                        src="images/hulk.jpg"
                        width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                    <div class="media-body">
                        <h4 class="m-0">Hulk</h4>
                        <p class="font-weight-light text-muted mb-0">Cinéfilo</p>
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
            </ul>
        </div>

        <div class="page-content p-5" id="content">
            <button id="sidebarCollapse" type="button"
                class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small
                    class="text-uppercase font-weight-bold">Alternar</small></button>

                    

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            
            <div class="container bootdey">
                <div class="col-md-12 bootstrap snippets">
                    <div class="panel">
                        <div class="panel-body">
                            <textarea class="form-control" rows="2" placeholder="O que você está assistindo?"></textarea>
                            <div class="mar-top clearfix">
                                <button class="btn btn-sm btn-primary pull-right" type="submit"><i
                                        class="fa fa-pencil fa-fw"></i> Compartilhar</button>
                                <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                                <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
                                <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media-block">
                                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture"
                                        src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                <div class="media-body">
                                    <div class="mar-btm">
                                        <a href="#" class="btn-link text-semibold media-heading box-inline">Lisa D.</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile -
                                            11 min atrás</p>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                        exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                        consequat.</p>
                                    <div class="pad-ver">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-default btn-hover-success" href="#"><i
                                                    class="fa fa-thumbs-up"></i></a>
                                            <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i
                                                    class="fa fa-thumbs-down"></i></a>
                                        </div>
                                        <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comentar</a>
                                    </div>
                                    <hr>
                                    <div>
                                        <div class="media-block">
                                            <a class="media-left" href="#"><img class="img-circle img-sm"
                                                    alt="Profile Picture"
                                                    src="./images/chefao.jpg"></a>
                                            <div class="media-body">
                                                <div class="mar-btm">
                                                    <a href="#"
                                                        class="btn-link text-semibold media-heading box-inline">Bobby
                                                        Marz</a>
                                                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> -
                                                        From Mobile - 7 min atrás</p>
                                                </div>
                                                <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                                    commodo consequat.</p>
                                                <div class="pad-ver">
                                                    <div class="btn-group">
                                                        <a class="btn btn-sm btn-default btn-hover-success active"
                                                            href="#"><i class="fa fa-thumbs-up"></i> You Like it</a>
                                                        <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i
                                                                class="fa fa-thumbs-down"></i></a>
                                                    </div>
                                                    <a class="btn btn-sm btn-default btn-hover-primary"
                                                        href="#">Comentar</a>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="media-block">
                                            <a class="media-left" href="#"><img class="img-circle img-sm"
                                                    alt="Profile Picture"
                                                    src="https://bootdey.com/img/Content/avatar/avatar3.png">
                                            </a>
                                            <div class="media-body">
                                                <div class="mar-btm">
                                                    <a href="#"
                                                        class="btn-link text-semibold media-heading box-inline">Lucy
                                                        Moon</a>
                                                    <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> -
                                                        From Web - 2 min atrás</p>
                                                </div>
                                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>
                                                <div class="pad-ver">
                                                    <div class="btn-group">
                                                        <a class="btn btn-sm btn-default btn-hover-success" href="#"><i
                                                                class="fa fa-thumbs-up"></i></a>
                                                        <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i
                                                                class="fa fa-thumbs-down"></i></a>
                                                    </div>
                                                    <a class="btn btn-sm btn-default btn-hover-primary"
                                                        href="#">Comentar</a>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media-block pad-all">
                                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture"
                                        src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                <div class="media-body">
                                    <div class="mar-btm">
                                        <a href="#" class="btn-link text-semibold media-heading box-inline">John Doe</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile -
                                            11 min ago</p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <img class="img-responsive thumbnail" src="https://via.placeholder.com/400x300"
                                        alt="Image">
                                    <div class="pad-ver">
                                        <span class="tag tag-sm"><i class="fa fa-heart text-danger"></i> 250
                                            Likes</span>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-default btn-hover-success" href="#"><i
                                                    class="fa fa-thumbs-up"></i></a>
                                            <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i
                                                    class="fa fa-thumbs-down"></i></a>
                                        </div>
                                        <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                                    </div>
                                    <hr>

                                    <!-- Comments -->
                                    <div>
                                        <div class="media-block pad-all">
                                            <a class="media-left" href="#"><img class="img-circle img-sm"
                                                    alt="Profile Picture"
                                                    src="https://bootdey.com/img/Content/avatar/avatar2.png"></a>
                                            <div class="media-body">
                                                <div class="mar-btm">
                                                    <a href="#"
                                                        class="btn-link text-semibold media-heading box-inline">Maria
                                                        Leanz</a>
                                                    <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> -
                                                        From Web - 2 min atrás</p>
                                                </div>
                                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>
                                                <div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-sm btn-default btn-hover-success" href="#"><i
                                                                class="fa fa-thumbs-up"></i></a>
                                                        <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i
                                                                class="fa fa-thumbs-down"></i></a>
                                                    </div>
                                                    <a class="btn btn-sm btn-default btn-hover-primary"
                                                        href="#">Comentar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    <footer>

    </footer>
</body>

</html>