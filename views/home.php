




<?php
include "../util/validacao_cookies.php";

require_once '../dao/EventoDAO.php';

$resultado = EventoDAO::buscarEventosUsuario($_COOKIE["username"]);
$meusEventos = array_reverse($resultado);

$eventosProximos = EventoDAO::buscarEventosCidade($_COOKIE["cidadeGeo"]);
$feed = array_reverse($eventosProximos);




?>



<!DOCTYPE html>
<html>

    <head>
        <title>Home - Event Divulgation &copy;</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../css/materialize.css" />
        <link rel="stylesheet" href="../css/home.css">
        <meta charset="UTF-8">
    </head>

    <body onload=" carregarDadosEventosProximos(); carregarDadosMeusEventos() ">

        <ul id="dropdown1" class="dropdown-content">
            <li><a href="home.php">Página Inicial</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>




        <nav class="nav-extended color indigo darken-2">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">Event Divulgation</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Opções de Conta<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
            <div class="nav-content">
                <div class="container">
                    <div class="container">
                        <div class="container">
                            <ul class="tabs tabs-fixed-width tabs-transparent">
                                <li class="tab"><a href="#inicio">Início</a></li>
                                <li class="tab"><a href="#meuseventos">Meus Eventos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>

        <div id="inicio" class="row cont">
            <div class="col s12 m1"></div>
            <div class="col s12 m10">
                <div class="card-panel">
                    <div class="row">
                        <div class="col s12 m3"></div>
                        <div class="col s12 m6">

                            <div style="margin-bottom: 300px">

                                <p id="eventos-proximos">

                                </p>

                            </div>
                        </div>
                        <div class="col s12 m3"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m1"></div>
        </div>
        <div id="meuseventos" class="row cont">
            <div class="col s12 m1"></div>
            <div class="col s12 m10">
                <div class="card-panel">
                    <div class="row">
                        <div class="col m2 offset-m11">
                            <a href="novoEvento.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m3"></div>
                        <div class="col s12 m6">


                            <div style="margin-bottom: 300px">

                                <p id="meus-eventos">

                                </p>

                            </div>





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
                            <li><a class="grey-text text-lighten-3" href="https://github.com/Ruan-Miguel">Ruan Miguel (Front-end)</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://github.com/XSrDanDanX">Daniel Dantas (Back-end)</a></li>
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
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });
        // Or with jQuery

        $(document).ready(function () {
            $('.sidenav').sidenav();
        });</script>
        <script>
            $(document).ready(function () {
                $('.tabs').tabs();
            });</script>
<!--        <script src="../js/home.js"></script>-->
        <script>
            
            function carregarDadosEventosProximos(){
                
                retorno = "";
                    <?php if (count($feed) == 0) { ?>

                    retorno = '<center><h4>Não há nenhum evento próximo!</h4></center>'

                    <?php } else {?>


                        <?php foreach ($feed as $evento) { ?>
                        retorno += '<div class="card large z-depth-3"><div class="card-image waves-effect waves-block waves-light"><img class="activator" src="'
                        retorno += '<?php echo $evento["file"]; ?>'
                        retorno += '"></div><div class="card-content"><span class="card-title activator grey-text text-darken-4">'
                        retorno += '<?php echo $evento["nome"]; ?>'
                        retorno += '<i class="material-icons right">more_vert</i></span><p>'
                        retorno += '<?php echo $evento["descricao"] . "<br><br>Categoria: " . $evento["opcao"]; ?>'
                        <?php if($evento["opcao"] == "Pago"){?>
                        retorno += '<?php echo " | Preço: ".$evento["preco"] ?>';
                        <?php } ?>
                        retorno += '</p></div><div class="card-reveal"><span class="card-title grey-text text-darken-4">'
                        retorno += '<?php echo $evento["nome"]; ?>'
                        retorno += '<i class="material-icons right">close</i></span><p>'
                        retorno += 'Usuario: <a href="#"><?php echo $evento["usuario"]; ?></a><?php echo "<br><br>Data: " . $evento["data"] . "<br><br> Horario: " . $evento["horario"] ?>'
                        retorno += '<?php echo "<br><br>Cidade: ".$evento["cidade"]."<br><br>Endereço: ".$evento["endereco"]; ?>'
                        retorno += '</p></div></div></div><br>'
                        <?php } ?>
                    <?php } ?>
                document.getElementById("eventos-proximos").innerHTML = retorno;
                
                
                
            }
            
            
            function carregarDadosMeusEventos() {
                retorno = "";
                    <?php if (count($meusEventos) == 0) { ?>

                    retorno = '<center><h4>Você ainda não cadastrou nenhum evento!</h4></center>'
                    
                    <?php } else {?>

                        <?php foreach ($meusEventos as $evento) {  ?>
                        retorno += '<form method="POST" action="teste.php"><div class="card large z-depth-3"><div class="card-image waves-effect waves-block waves-light"><img class="activator" src="'
                        retorno += '<?php echo $evento["file"];?>'
                        retorno += '"></div><div class="card-content"><span id="nomeEvento<?"class="card-title activator grey-text text-darken-4">'
                        retorno += '<?php echo $evento["nome"]; ?>'
                        retorno += '<i class="material-icons right">more_vert</i></span><p>'
                        retorno += '<?php echo $evento["descricao"] . "<br><br>Categoria: " . $evento["opcao"]; ?>'
                        <?php if($evento["opcao"] == "Pago"){?>
                        retorno += '<?php echo " | Preço: ".$evento["preco"] ?>';
                        <?php } ?>
                        retorno += '</p></div><div class="card-reveal"><span class="card-title grey-text text-darken-4">'
                        retorno += '<?php echo $evento["nome"]; ?>'
                        retorno += '<i class="material-icons right">close</i></span><p>'
                        retorno += 'Usuario: <a href="#"><?php echo $evento["usuario"]; ?></a><?php echo "<br><br>Data: " . $evento["data"] . "<br><br> Horario: " . $evento["horario"] ?>'
                        retorno += '<?php echo "<br><br>Cidade: ".$evento["cidade"]."<br><br>Endereço: ".$evento["endereco"]; ?>'
                        retorno += '</p></div></div></div><br></form>'
                        
                        <?php } ?>
                    <?php } ?>
                document.getElementById("meus-eventos").innerHTML = retorno;
            }

            function pegarInformacao(){
                
            }
        </script>
    </body>

</html> 