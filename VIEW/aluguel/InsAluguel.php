<?php
require_once __DIR__ . '/../../DAL/aluguel.php';
require_once __DIR__ . '/../../MODEL/Aluguel.php';

$aluguel = new \MODEL\Aluguel();
$aluguel->setClienteId($_POST['cliente_id']);
$aluguel->setFilmeId($_POST['filme_id']);
$aluguel->setDataAluguel($_POST['data_aluguel']);
$aluguel->setDataDev($_POST['data_dev']);

$dalAluguel = new \DAL\AluguelDAL(); 
$dalAluguel->Insert($aluguel);

header("Location: LstAluguel.php");
exit;
