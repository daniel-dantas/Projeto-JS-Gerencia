<?php

require_once '../model/Usuario.php';
require_once '../connection/ConnectionFactory.php';
abstract class UsuarioDAO {

    


    public static function inserir(Usuario $usuario) {


        try {

            $conn = getConnection();

            $stmt = $conn->prepare('INSERT INTO usuario (nome, sobrenome, cidade, estado, email, username, senha) VALUES (?,?,?,?,?,?,?)');

            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getSobrenome());
            $stmt->bindValue(3, $usuario->getCidade());
            $stmt->bindValue(4, $usuario->getEstado());
            $stmt->bindValue(5, $usuario->getEmail());
            $stmt->bindValue(6, $usuario->getUsuario());
            $stmt->bindValue(7, $usuario->getSenha());

            if ($stmt->execute()) {
                setcookie("nome", $dados['nome']);
                setcookie("sobrenome", $dados['sobrenome']);
                setcookie("cidade", $dados['cidade']);
                setcookie("estado", $dados['estado']);
                setcookie("email", $dados['email']);
                setcookie("usuario", $dados['usuario']);
                setcookie("senha", $dados['senha']);
                header('location: ../views/home.php');
            } else {
                
                
                header('location: ../views/cadastrar.html');
                
                
            }
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }

    public static function verificarUserName($userName) {
    
        $conn = getConnection();

        $consulta = $conn->query("SELECT * FROM usuario WHERE usuario=$userName;");
        
        if(empty($consulta)){
            return true;
        }else{
            return false;
        }
        
    }
    
   
    
}
