<?php


$userName = $_POST['userName'];
$password = $_POST['password'];

include "../connection/conecta_to_login.php";


$resultado = mysqli_query($con, "SELECT * FROM usuario WHERE username='$userName'");
$linhas = mysqli_num_rows($resultado);

if($linhas == 0){
    echo 'Usuario não encontrado';
}else{
    $dados = mysqli_fetch_array($resultado);
    if($password != $dados['senha']){
        echo 'Senha incorreta';
    }else{
        setcookie("nome", $dados['nome']);
        setcookie("sobrenome", $dados['sobrenome']);
        setcookie("cidade", $dados['cidade']);
        setcookie("estado", $dados['estado']);
        setcookie("email", $dados['email']);
        setcookie("username", $dados['username']);
        setcookie("senha", $dados['senha']);
        
        header("Location: home.php");
    }
}