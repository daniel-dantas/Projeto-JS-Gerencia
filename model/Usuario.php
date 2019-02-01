<?php

class Usuario {
    
    
    private $nome;
    private $sobrenome;
    private $cidade;
    private $estado;
    private $email;
    private $usuario;
    private $senha;
    
    function __construct($nome, $sobrenome, $cidade, $estado, $email, $usuario, $senha) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setEmail($email) {
        $this->email = $email;
    }


    
    
}
