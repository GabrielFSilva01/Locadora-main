<?php
require_once __DIR__ . '/../../DAL/Aluguel.php';
require_once __DIR__ . '/../../MODEL/Aluguel.php';
require_once __DIR__ . '/../../DAL/cliente.php';
require_once __DIR__ . '/../../DAL/filme.php';

$dalAluguel = new \DAL\AluguelDAL();
$aluguel = $dalAluguel->SelectById($_GET['id']);

$dalCliente = new \DAL\Cliente();
$cliente = $dalCliente->SelectById($aluguel->getClienteId());
$listaClientes = $dalCliente->Select();

$dalFilme = new \DAL\Filme();
$filme = $dalFilme->SelectById($aluguel->getFilmeId());
$listaFilmes = $dalFilme->Select();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Aluguel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container">
    <h4 class="center-align">Detalhes do Aluguel</h4>
    <div class="card">
        <div class="card-content">
            <p><strong>ID do Aluguel:</strong> <?= $aluguel->getId() ?></p>
            <p><strong>Cliente:</strong> <?= $cliente->getNome() ?> (ID: <?= $cliente->getId() ?>)</p>
            <p><strong>Filme:</strong> <?= $filme->getTitulo() ?> (ID: <?= $filme->getId() ?>)</p>
            <p><strong>Data do Aluguel:</strong> <?= $aluguel->getDataAluguel() ?></p>
            <p><strong>Data de Devolução:</strong> <?= $aluguel->getDataDev() ?></p>
        </div>
        <div class="card-action center-align">
            <a href="LstAluguel.php" class="btn amber darken-2">Voltar</a>
            <a href="FormAluguelEdit.php?id=<?= $aluguel->getId() ?>" class="btn blue">Editar</a>
            <a href="DeleteAluguel.php?id=<?= $aluguel->getId() ?>" class="btn red">Remover</a>
        </div>
    </div>
</div>
</body>
</html>
