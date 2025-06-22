<?php
require_once __DIR__ . '/../../DAL/Aluguel.php';
require_once __DIR__ . '/../../MODEL/Aluguel.php';

$dalAluguel = new \DAL\AluguelDAL();
$alugueis = $dalAluguel->Select();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Aluguéis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container">
    <h4 class="center-align">Listagem de Aluguéis</h4>
    <table class="striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Cliente</th>
                <th>ID Filme</th>
                <th>Data Aluguel</th>
                <th>Data Devolução</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alugueis as $aluguel): ?>
                <tr>
                    <td><?= $aluguel->getId() ?></td>
                    <td><?= $aluguel->getClienteId() ?></td>
                    <td><?= $aluguel->getFilmeId() ?></td>
                    <td><?= $aluguel->getDataAluguel() ?></td>
                    <td><?= $aluguel->getDataDev() ?></td>
                    <td>
                        <a href="DetailAluguel.php?id=<?= $aluguel->getId() ?>" class="btn-small blue">Detalhes</a>
                        <a href="FormAluguelEdit.php?id=<?= $aluguel->getId() ?>" class="btn-small orange">Editar</a>
                        <a href="DeleteAluguel.php?id=<?= $aluguel->getId() ?>" class="btn-small red" onclick="return confirm('Deseja remover este aluguel?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="FormAluguel.php" class="btn green">Novo Aluguel</a>
</div>
</body>
</html>
