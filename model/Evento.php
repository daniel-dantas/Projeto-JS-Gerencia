<?php

require_once 'Usuario.php';

class Evento {
    
    private $nome;
    private $descricao;
    private $file;
    private $opcao;
    private $preco;
    private $usuario;
    private $cidade;
    private $endereco;
    private $hora;
    private $data;
    
    
    function __construct($nome, $descricao, $file, $opcao, $preco, $cidade, $endereco, $usuario, $hora, $data) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->file = $file;
        $this->opcao = $opcao;
        $this->preco = $preco;
        $this->cidade = $cidade;
        $this->endereco = $endereco;
        $this->usuario = $usuario;
        $this->hora = $hora;
        $this->data = $data;
    }
    
    function getHora() {
        return $this->hora;
    }

    function getData() {
        return $this->data;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setData($data) {
        $this->data = $data;
    }

        
    
    function getCidade() {
        return $this->cidade;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

        
    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getFile() {
        return $this->file;
    }

    function getOpcao() {
        return $this->opcao;
    }

    function getPreco() {
        return $this->preco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setFile($file) {
        $this->file = $file;
    }

    function setOpcao($opcao) {
        $this->opcao = $opcao;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }


    
    
}
