<?php

if (isset($_COOKIE["usuario"])) {
    $userName = $_COOKIE["usuario"];
}
if (isset($_COOKIE["senha"])) {
    $password = $_COOKIE["senha"];
}

if (empty($userName) OR empty($password)) {

    include '../connection/conecta_to_login.php';

    $resultado = mysqli_query($con, "SELECT * FROM usuario WHERE usuario=$userName");

    if (mysqli_num_rows($result) == 1) {


        $dados = mysqli_fetch_array($resultado);

        $passBD = $dados["senha"];

        if ($passBD != $password) {
            setcookie("usuario");
            setcookie("senha");

            header("Location: login.html");
            exit();
        }
    } else {
        setcookie("usuario");
        setcookie("senha");
        header("Location: login.html");
        exit();
    }
}else{
    header("Location: login.html");
    mysqli_close($con);
}