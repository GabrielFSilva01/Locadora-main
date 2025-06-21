<?php
require_once __DIR__ . '/../../DAL/Cliente.php';
require_once __DIR__ . '/../../MODEL/Cliente.php';
$id = $_GET['id'] ;
$dalCliente = new DAL\Cliente();
$dalCliente->Delete($id);
header('Location: Lstcliente.php');
?>