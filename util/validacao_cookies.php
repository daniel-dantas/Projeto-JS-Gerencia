<?php

if (isset($_COOKIE["userName"])) {
    $userName = $_COOKIE["userName"];
}
if (isset($_COOKIE["password"])) {
    $password = $_COOKIE["password"];
}

if (empty($userName) OR empty($password)) {

    include '../connection/conecta_to_login.php';

    $resultado = mysqli_query($con, "SELECT * FROM usuario WHERE usuario=$userName");

    if (mysqli_num_rows($result) == 1) {


        $dados = mysqli_fetch_array($resultado);

        $passBD = $dados["senha"];

        if ($passBD != $password) {
            setcookie("userName");
            setcookie("password");

            echo "Você não efetuou login";
            exit();
        }
    } else {
        setcookie("userName");
        setcookie("password");
        echo "Você não efetuou login";
        exit();
    }
}else{
    echo "Você não efetuou o login";
    
    mysqli_close($con);
}