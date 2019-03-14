<?php

include '../util/config_upload.php';

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$usuario = $_COOKIE["username"];



set_time_limit(0);
$nome_arquivo = $_FILES['arquivo']['name'];
$tamanho_arquivo = $_FILES['arquivo']['size'];
$arquivo_temporario = $_FILES['arquivo']['tmp_name'];


echo "$nome_arquivo";

if (!empty($nome_arquivo)) {

    if ($sobrescrever == "nao" && file_exists("$caminho_absoluto"+"/$nome_arquivo"+"_"+"$nome"+"_"+"$usuario")) {
        die("arquivo já existe");
    }
    $ext = strrchr($nome_arquivo, '.');

    if ($limitar_ext == "sim" && !in_array($ext, $extensoes_validas)) {
        die("Invalido");
    }

    if (move_uploaded_file($arquivo_temporario, "$caminho_absoluto/posts/$arquivo_temporario"+"_"+"$nome"+"_"+"$usuario")) {
        echo 'sucesso!';
        $caminho = "$caminho_absoluto/posts/$arquivo_temporario"+"_"+"$nome"+"_"+"$usuario";
    }
}