<!DOCTYPE html>
<html>
    <head>
        <title>New Event</title>
        <link rel="stylesheet" href="../css/materialize.css">
        <link rel="stylesheet" href="../css/criarevento.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body onload="localizacao()">
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
            <li><a href="perfil.php">Perfil</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
        <!--COLOCAR UM TAMANHO MÁX DE CARACTERES NO TEXT AREA
                OBS: O NATURAL DO MATERIALIZE CONTA QUEBRAS DE LINHA COMO UM CARACTERE-->
        <div class="container">
            <div class="container">
                <div class="row"></div>
                <div class="row"></div>
                <div class="row indigo lighten-5">
                    <div class="
                         row"></div>
                    <center><img class="responsive-img" src="../images/new-product.png"></center>
                    <form action="criarevento.php" method="POST" enctype="multipart/form-data" >
                        <div class="input-field col m10 offset-m1">
                            <input id="nome" name="nome" type="text" class="validate" oninput="">
                            <label for="nome">Nome do Evento</label>
                        </div>
                        <div class="input-field col m10 offset-m1">
                            <textarea id="descricao" name="descricao" class="materialize-textarea"></textarea>
                            <label for="descricao">Descrição</label>
                        </div>
                        <div class="input-field col m10 offset-m1">
                            <input id="cidade" name="cidade" type="text" class="validate" oninput="">
                            <label for="cidade">Cidade</label>
                        </div>
                        <div class="input-field col m10 offset-m1">
                            <input id="endereco" name="endereco" type="text" class="validate" oninput="">
                            <label for="endereco">Endereço</label>
                        </div>
                        <div class="input-field col m10 offset-m1">
                            <input id="data" name="data" type="text" class="datepicker">
                            <label for="data">Data</label>
                        </div>
                        <div class="input-field col m10 offset-m1">
                            <input id="hora" name="hora" type="text" class="timepicker">
                            <label for="data">Horário</label>
                        </div>
                        <div class="col m10 offset-m1">
                            <div class="file-field input-field">
                                <div class="btn indigo darken-4">
                                    <span >Imagem</span>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                                    <input name="arquivo" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col m1 offset-m3">
                            <label>
                                <input onchange="opcaoDoPreco()"class="with-gap" value="Grátis" name="custo" type="radio" checked />
                                <span>Grátis</span>
                            </label>
                        </div>
                        <div class="col m1 offset-m3">
                            <label>
                                <input onchange="opcaoDoPreco()" class="with-gap" value="Pago" name="custo" type="radio" />
                                <span>Pago</span>
                            </label>
                        </div>
                        <div class="row"></div>
                        <div class="col m12 offset-m5">
                            <button class="btn indigo darken-4 waves-effect waves-light" type="submit" name="action">Criar</button>
                        </div>
                    </form>
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


        <!--COLOCAR CRÉDITOS DO AUTOR DA IMAGEM-->
        <!--<div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>-->

        <script src="../js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="../js/criarevento.js"></script>

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


                                    function localizacao() {
                                        var cidade = document.getElementById('cidade')
                                        cidade.value = "<?php echo "".$_COOKIE["cidadeGeo"] ?>"
                                        cidade.parentNode.lastElementChild.className = 'active'
                                    }


        </script>
    </body>
</html>