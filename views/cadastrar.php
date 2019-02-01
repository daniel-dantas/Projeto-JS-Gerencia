<?php

require_once '../dao/UsuarioDAO.php';

$user = new Usuario($_POST['nome'], $_POST['sobrenome'], $_POST['cidade'], $_POST['estado'], $_POST['email'], $_POST['usuario'], $_POST['senha']);

UsuarioDAO::inserir($user);


