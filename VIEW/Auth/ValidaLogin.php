<?php
require_once __DIR__ . '/../../DAL/usuario.php';
require_once __DIR__ . '/../../DAL/Conexao.php';

$usuario = trim($_POST['usuario'] ?? '');
$senha   = trim($_POST['password'] ?? '');



$dalUsuario = new \DAL\Usuario();
$usuarioObj = $dalUsuario->SelectUsuario($usuario);

//if($usuarioObj !=null){
    echo "usuario: " . $usuarioObj->getUsuario() . "<br>";
    echo "senha: " . $usuarioObj->getSenha() . "<br>";
//}

if (md5($senha) == $usuarioObj->getSenha()) {
  session_start();
    $_SESSION['usuario'] = $usuarioObj->getUsuario();
    header("Location: ../menu.php");
}
else {
    echo "Usuário ou senha inválidos!";
    header("Location: ../index.php");
    exit();
}