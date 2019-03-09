<?php

class Evento {
    
    private $nome;
    private $descricao;
    private $file;
    private $opcao;
    private $preco;
    
    function __construct($nome, $descricao, $file, $opcao, $preco) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->file = $file;
        $this->opcao = $opcao;
        $this->preco = $preco;
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
