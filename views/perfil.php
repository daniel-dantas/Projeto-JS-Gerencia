<!DOCTYPE html>
<html>
    <head>
        <title>Perfil</title>
        <meta charset="utf-8">
        <!-- Segue ao lado a chamada ao Materialize -->
        <link rel="stylesheet" href="../css/materialize.css" />
        <link rel="stylesheet" href="../css/perfil.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>

            .perfil{

                width: 230px;
                height: 270px;
                margin-left: 30px;
                <?php if (empty($_COOKIE["perfil"])) { ?>
                background-image: url(../images/usuario.png);
                <?php } else { ?>
                    background-image: url(<?php echo "" . $_COOKIE["perfil"]; ?>);
                <?php } ?>
                
                background-repeat: round;
                
            }



        </style>



    </head>
    <body>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="home.php">Página Inicial</a></li>
            <li><a href="">Perfil</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        <nav class="nav-extended color indigo darken-2">
            <div class="nav-wrapper ">
                <a href="home.php" class="brand-logo center">Event Divulgation</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Opções de Conta<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>

        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="home.php">Página Inicial</a></li>
            <li><a href="#">Perfil</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>



        <div class="container">
            <div class="container">
                <div class="row"></div>
                <div class="row indigo lighten-5">
                    <div class="row"></div>
                    <div class="col m6">
                        <div class="perfil">

                        </div>
                    </div>
                    <div class="col m6">
                        <div class="card-panel blue"><?php echo "" . $_COOKIE["nome"] . " " . $_COOKIE["sobrenome"]; ?></div>
                    </div>
                    <div class="col m6">
                        <div class="card-panel blue"><?php echo "" . $_COOKIE["email"]; ?></div>
                    </div>
                    <div class="col m6">
                        <div class="card-panel blue"><?php echo "" . $_COOKIE["cidade"]; ?></div>
                    </div>
                    <div class="row"></div>
                    <div class="col s6 offset-s5">
                        <a href="edicao.php" class="waves-effect waves-light indigo darken-4 btn">Editar</a>
                    </div>
                    <div class="row"></div>
                </div>
            </div>
        </div>
        <footer class="page-footer indigo darken-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Event Divulgation</h5>
                        <p class="grey-text text-lighten-4">Divulgue seus eventos no maior aplicativo de eventos de todos os
                            tempos</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Desenvolvedores</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Ruan Miguel (Front-end)</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Daniel Dantas (Back-end)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 Event Divulgation

                </div>
            </div>
        </footer>
        <script src="../js/perfil.js"></script>
        <!-- Segue ao lado a chamada ao Materialize -->
        <script src="../js/jquery.js"></script>
        <script src="../js/materialize.js"></script>
        <script>
            $(".dropdown-trigger").dropdown();
            document.addEventListener('DOMContentLoaded', function () {
                var elems = document.querySelectorAll('.sidenav');
                var instances = M.Sidenav.init(elems, options);
            });

            $(document).ready(function () {
                $('.datepicker').datepicker();
            });

            $(document).ready(function () {
                $('.timepicker').timepicker();
            });
        </script>
    </body>
</html>