<?php

require_once '../dao/UsuarioDAO.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if (empty($nome) || empty($sobrenome) || empty($cidade) || empty($estado) || empty($email) || empty($usuario) || empty($senha)) {
    
} else {
    $user = new Usuario($nome, $sobrenome, $cidade, $estado, $email, $usuario, $senha);
    UsuarioDAO::inserir($user);
}






