<script src="../js/jquery.js"></script>
<script>

    function carregarDados() {
        $.ajax({
            url: "https://geoip-db.com/jsonp",
            jsonpCallback: "callback",
            dataType: "jsonp",
            success: function (location) {

                <?php
                
                $city = "document.write(location.city);";

                include '../connection/ConnectionFactory.php';

                $conn = getConnection();

//                echo "$city";
                
                $string = "";

                $busca = $conn->prepare("SELECT * FROM evento");
                $busca->execute();

                $dadosEventos = $busca->fetchAll();


                $string .= "Cidade de acesso: $city<br>Quantidade de eventos:  ".count($dadosEventos);

                foreach ($dadosEventos as $value) {
                    
                    if($city == $value["cidade"]){
                        $string .= "Cidade: ".$value["cidade"];
                    }
                    
                    
                }
                ?>
                
                
                var retorno = '<div class="card large z-depth-3"><div class="card-image waves-effect waves-block waves-light"><img class="activator" src="'
                retorno += 'https://s.calendarr.com/upload/08/96/carnaval-f.png?t=1551409211'
                retorno += '"></div><div class="card-content"><span class="card-title activator grey-text text-darken-4">'
                retorno += 'Nome do evento'
                retorno += '<i class="material-icons right">more_vert</i></span><p>'
                retorno += 'Leve descrição sobre o evento buscando mostrar suas caracteríscticas mais chamativas'
                retorno += '</p></div><div class="card-reveal"><span class="card-title grey-text text-darken-4">'
                retorno += 'Nome do evento'
                retorno += '<i class="material-icons right">close</i></span><p>'
                retorno += 'Informações de contato, sites, organizador e coisas do gênero'
                retorno += '</p></div></div></div>'
                document.getElementById("meus-eventos").innerHTML = "<?php echo "<li>$string</li>"; ?>";
            }
        });

    }


</script>

<body onload="carregarDados()">


    <div>
        <ul id="meus-eventos">

        </ul>
    </div>


</body>
