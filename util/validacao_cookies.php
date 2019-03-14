
<?php

if(isset($_COOKIE["username"])){
    $username = $_COOKIE["username"];
}
if(isset($_COOKIE["senha"])){
    $senha = $_COOKIE["senha"];
}

if(!(empty($username) OR empty($senha))){
    include "../connection/conecta_to_login.php";
    $resultado = mysqli_query($con, "SELECT * FROM usuario WHERE username='$username'");
    
    if(mysqli_num_rows($resultado) == 1){
        
        $dados = mysqli_fetch_array($resultado);
        $senha_bd = $dados["senha"];
        if($senha != $senha_bd){
            setcookie("username");
            setcookie("senha");
            header("location: ../index.html");
        }
        
        
    }else{
        
        
        setcookie("username");
        setcookie("senha");
        header("location: ../index.html");
        
    }
}else{
    header("location: ../index.html");
}
