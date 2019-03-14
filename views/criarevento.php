<?php

include '../util/config_upload.php';
require_once '../dao/EventoDAO.php';





if (isset($_POST["preco"])) {
    $preco = doubleval($_POST["preco"]);
} else {
    $preco = 0;
}

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$usuario = $_COOKIE["username"];
$cidade = $_POST["cidade"];
$endereco = $_POST["endereco"];
$custo = $_POST["custo"];
$file;

if (isset($_FILES['arquivo'])) {
    date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

    $ext = strtolower(substr($_FILES['arquivo']['name'], -4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = '../posts/'; //Diretório para uploads

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo

    $file = $dir . $new_name;
}else{
    echo 'Não deu certo!';
}



$evento = new Evento($nome, $descricao, $file, $custo, $preco, $cidade, $endereco, $usuario);

EventoDAO::inserir($evento);


