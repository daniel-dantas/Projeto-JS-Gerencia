<html>

    <head>
        <title>Edição de Dados</title>
        <meta charset="utf-8"/>
        <!-- Segue ao lado a chamada ao Materialize -->
        <link rel="stylesheet" href="../css/materialize.css" />
        <link rel="stylesheet" href="../css/estilo.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body class="corpo">

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




        <div class="row">
            <div class=" col s12 m3"></div>
            <div class="col s12 m6">
                <form action="edicaoAction.php" method="POST" enctype="multipart/form-data" >
                    <div class="card-panel">
                        <center>
                            <h5>Edição de Usuario</h5>
                        </center><br>

                        <div class="row">

                            <div class="col s12 m1"></div>
                            <div class="col s12 m10">
                                <div class="input-field col s12 m6">
                                    <input name="nome" id="nome" value="<?php echo "".$_COOKIE["nome"]; ?>" type="text" placeholder="Nome" class="validate" oninput="verificacao()">
                                    
                                </div>
                                <div class="input-field col s12 m6">
                                    <input name="sobrenome" value="<?php echo "".$_COOKIE["sobrenome"]; ?>" id="sobrenome" placeholder="Sobrenome" type="text" class="validate" oninput="verificacao()">
                                    
                                </div>
                                <div class="col s12 m12">
                                    <div class="file-field input-field">
                                        <div class="btn indigo darken-4">
                                            <span >Perfil</span>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                                            <input name="arquivo" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-field col s12">
                                    <input name="senha" id="senha" value="<?php echo "".$_COOKIE["senha"]; ?>" type="password" placeholder="Senha" class="validate" oninput="verificacao()">
                                    
                                </div>
                                <div class="input-field col s12 ">
                                    <input name="senha" id="confirmarSenha" value="<?php echo "".$_COOKIE["senha"]; ?>" placeholder="Confirmar Senha" type="password" class="validate" oninput="verificacao()">
                                    
                                </div>
                                <div class="input-field col s12">
                                    <input name="email" id="email" value="<?php echo "".$_COOKIE["email"]; ?>" type="email" placeholder="email" class="validate" oninput="verificacao()">
                                    
                                </div>
                                <div class="input-field col s12 m6">
                                    <input name="cidade" id="cidade" value="<?php echo "".$_COOKIE["cidade"]; ?>" placeholder="cidade" type="text" class="validate" oninput="verificacao()">
                                    
                                </div>
                                <div class="input-field col s12 m6">
                                    <input name="estado" id="estado" value="<?php echo "".utf8_encode($_COOKIE["estado"]); ?>" placeholder="estado"  type="text" class="validate" oninput="verificacao()">
                                    
                                </div>
                            </div>
                            <div class="col s12 m1"></div>
                        </div>

                        <center>

                            <button id="cadastrar" class="waves-effect waves-light indigo darken-4 btn" type="submit">Editar</button><br>
                            <br>
                            
                        </center>

                    </div>
                </form>
            </div>
            <div class="col s12 m3"></div>
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