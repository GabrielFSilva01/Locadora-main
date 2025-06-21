<?php
require_once __DIR__ . '/../../DAL/Cliente.php';
require_once __DIR__ . '/../../MODEL/Cliente.php';
require_once __DIR__.'/../../VIEW/menu.php';

$cliente = new \MODEL\Cliente();
$cliente->setNome($_POST['nome']);
$cliente->setEmail($_POST['email']);
$cliente->setTelefone($_POST['telefone']);
$cliente->setDataCadastro($_POST['data_cadastro'] ?? date('Y-m-d'));

$dalCliente = new \DAL\Cliente();



$dalCliente->insert($cliente);

header('Location: Lstcliente.php');
exit;
