<?php

require_once '../model/Evento.php';
require_once '../model/Usuario.php';

abstract class EventoDAO {

    public static function inserir(Evento $evento) {

        try {
            include '../connection/ConnectionFactory.php';
            $conn = getConnection();

            $stmt = $conn->prepare('INSERT INTO evento (usuario,nome, descricao, file, opcao, endereco, cidade, preco, horario, data) VALUES (?,?,?,?,?,?,?,?,?,?)');

            $stmt->bindValue(1, $evento->getUsuario());
            $stmt->bindValue(2, $evento->getNome());
            $stmt->bindValue(3, $evento->getDescricao());
            $stmt->bindValue(4, $evento->getFile());
            $stmt->bindValue(5, $evento->getOpcao());
            $stmt->bindValue(6, $evento->getEndereco());
            $stmt->bindValue(7, $evento->getCidade());
            $stmt->bindValue(8, $evento->getPreco());
            $stmt->bindValue(9, $evento->getHora());
            $stmt->bindValue(10, $evento->getData());

            if ($stmt->execute()) {

                header('location: ../views/home.php');
                ?>

                <script>
                    alert("Evento Cadastrado com sucesso!");
                </script>

                <?php

            } else {
                ?>

                <script>
                    alert("Erro ao cadastrar evento");
                </script>    

                <?php

            }
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }

    public static function buscarEventosUsuario($usuario) {

        include "../connection/ConnectionFactory.php";
        
        $conn = getConnection();
        
        $busca = $conn->prepare("SELECT * FROM evento WHERE usuario='$usuario'");
        $busca->execute();

        $dadosEventos = $busca->fetchAll();

        return $dadosEventos;
    }

}
