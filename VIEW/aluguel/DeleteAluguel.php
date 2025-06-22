<?php
require_once __DIR__ . '/../../DAL/aluguel.php';
$id = $_GET['id'] ?? 0;

$dal = new \DAL\AluguelDAL();
$dal->Delete($id);

header("Location: LstAluguel.php");
exit;
