<?php

require_once '../model/Evento.php';
require_once '../model/Usuario.php';

abstract class EventoDAO {
    
    
    
    public static function inserir(Evento $evento){
        
        try {

            $conn = getConnection();

            $stmt = $conn->prepare('INSERT INTO evento (usuario,nome, descricao, file, opcao, preco) VALUES (?,?,?,?,?,?)');

            $stmt->bindValue(1, $evento->getUsuario());
            $stmt->bindValue(2, $evento->getNome());
            $stmt->bindValue(3, $evento->getDescricao());
            $stmt->bindValue(4, $evento->getFile());
            $stmt->bindValue(5, $evento->getFile());
            $stmt->bindValue(6, $evento->getOpcao());
            $stmt->bindValue(7, $evento->getPreco());

            if ($stmt->execute()) {
                ?>
                
                    <script>
                        alert("Evento Cadastrado com sucesso!");
                    </script>
                    
                <?php
                header('location: ../views/home.php');
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
    
    
    
    
    
}
