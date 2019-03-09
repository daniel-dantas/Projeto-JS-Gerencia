
<?php include "../util/validacao_cookies.php";?>



<!DOCTYPE html>
<html>

<head>
    <title>Home - Event Divulgation &copy;</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/materialize.css" />
    <link rel="stylesheet" href="../css/home.css">
    <meta charset="UTF-8">
</head>

<body onload="carregarDados()">
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="">Perfil</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Sair</a></li>
    </ul>
    <nav class="nav-extended color indigo darken-2">
        <div class="nav-wrapper ">
            <a href="#" class="brand-logo center">Event Divulgation</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="home.php">Inicio</a></li>
                <li><a href="#">Meus eventos</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Opções de Conta<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>

    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="home.php">Inicio</a></li>
        <li><a href="#">Perfil</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Sair</a></li>
    </ul>
    <div class="row cont">
        <div class="col s12 m1"></div>
        <div class="col s12 m10">
            <div class="card-panel">
                <div class="row">
                    <div class="col s12 m3"></div>
                    <div class="col s12 m6">

                        <div id="corpo-principal" class=""></div>


                    </div>
                    <div class="col s12 m3"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m1"></div>

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

    <script src="../js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(".dropdown-trigger").dropdown();
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>
    <script src="../js/home.js"></script>
</body>

</html> 