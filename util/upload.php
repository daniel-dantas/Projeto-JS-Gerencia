<?php



function upload($nome_post,$nomeEvento, $usuario){
    
    include "config_upload.php";
    
    set_time_limit(0);
    include 'config_upload.php';
    $nome_arquivo = $_FILES['file']['name'];
    $tamanho_arquivo = $_FILES['file']['size'];
    $arquivo_temporario = $_FILES['file']['tmp_name'];
    
    if(!empty($nome_arquivo)){
        
        if($sobrescrever == "nao" && file_exists("$caminho_absoluto/posts/$nome_arquivo+_+$nome+_+$usuario")){
            die("arquivo já existe");
        }
        $ext = strrchr($nome_arquivo, '.');
       
        if($limitar_ext == "sim" && !in_array($ext, $extensoes_validas)){
            die("Invalido");
        }
        
        if(move_uploaded_file($arquivo_temporario, "$caminho_absoluto/posts/$nome_arquivo+_+$nome+_+$usuario")){
            echo 'sucesso!';
            return "$caminho_absoluto/posts/$arquivo_temporario+_+$nome+_+$usuario";
        }
        
        
    }
    
}