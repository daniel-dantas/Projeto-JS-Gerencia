<?php

require_once '../dao/UsuarioDAO.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$file;

$user = new Usuario($nome, $sobrenome, $cidade, $estado, $email, $_COOKIE["username"], $senha);

if (isset($_FILES['arquivo'])) {
    date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

    $ext = strtolower(substr($_FILES['arquivo']['name'], -4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = '../perfis/'; //Diretório para uploads

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo

    $file = $dir . $new_name;
    $user->setPerfil($file);
}else{
    
    $user->setPerfil($_COOKIE["perfil"]);
}



UsuarioDAO::update($user);

