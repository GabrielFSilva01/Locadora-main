<?php
require_once __DIR__ . '/../../DAL/aluguel.php';
require_once __DIR__ . '/../../MODEL/aluguel.php';

$aluguel = new \MODEL\Aluguel();
$aluguel->setId($_POST['id']);
$aluguel->setClienteId($_POST['cliente_id']);
$aluguel->setFilmeId($_POST['filme_id']);
$aluguel->setDataAluguel($_POST['data_aluguel']);
$aluguel->setDataDev($_POST['data_dev']);

$dal = new \DAL\AluguelDAL();
$dal->Update($aluguel);

header("Location: LstAluguel.php");
exit;
