<?php


require_once '../model/Usuario.php';

abstract class UsuarioDAO {

    public static function inserir(Usuario $usuario) {

        try {
            
            include '../connection/ConnectionFactory.php';

            $conn = getConnection();

            $stmt = $conn->prepare('INSERT INTO usuario (nome, sobrenome, cidade, estado, email, usuario, senha) VALUES (?,?,?,?,?,?,?)');

            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getSobrenome());
            $stmt->bindValue(3, $usuario->getCidade());
            $stmt->bindValue(4, $usuario->getEstado());
            $stmt->bindValue(5, $usuario->getEmail());
            $stmt->bindValue(6, $usuario->getUsuario());
            $stmt->bindValue(7, $usuario->getSenha());

            if ($stmt->execute()) {
                echo 'Salvo com sucesso!';
            } else {
                echo 'Erro ao salvar!';
            }
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }

}
