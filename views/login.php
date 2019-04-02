

<?php
include "../connection/conecta_to_login.php";



$userName = $_POST['userName'];
$password = $_POST['password'];

$resultado = mysqli_query($con, "SELECT * FROM usuario WHERE username='$userName'");
$linhas = mysqli_num_rows($resultado);

if ($linhas == 0) {
    setcookie("token","erro");
    header("Location: ../index.html");
} else {
    $dados = mysqli_fetch_array($resultado);
    if ($password != $dados['senha']) {
        setcookie("token","erro");
        header("Location: ../index.html");
    } else {
        
        setcookie("nome", $dados['nome']);
        setcookie("sobrenome", $dados['sobrenome']);
        setcookie("cidade", $dados['cidade']);
        setcookie("estado", $dados['estado']);
        setcookie("email", $dados['email']);
        setcookie("username", $dados['username']);
        setcookie("senha", $dados['senha']);
        setcookie("perfil", $dados["perfil"]);
        header("Location: home.php");
    }
}
?>

