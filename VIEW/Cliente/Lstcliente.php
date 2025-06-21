<?php

namespace VIEW\Cliente;

require_once __DIR__ . '/../../DAL/Cliente.php';
require_once __DIR__ . '/../../MODEL/Cliente.php';

use DAL\Cliente;

$dalCliente = new Cliente();
$clientes = $dalCliente->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar clientes</title>
</head>

<body>
    <div class="container green navy lighten-4">
        <div class="center green navy lighten-4">
            <h1>Listagem de clientes</h1>
        </div>
    </div>

    <table class="striped highlight green navy lighten-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Cadastro</th>
                <th>Telefone</th>
                <th>
                    Ações
                    <a class="waves-effect waves-light btn-small" href="FormCliente.php" style="margin-left:10px;">
                        Operações
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente) { ?>
                <tr>
                    <td><?= $cliente->getId(); ?></td>
                    <td><?= htmlspecialchars($cliente->getNome()); ?></td>
                    <td><?= htmlspecialchars($cliente->getEmail()); ?></td>
                    <td><?= $cliente->getDataCadastro(); ?></td>
                    <td><?= htmlspecialchars($cliente->getTelefone()); ?></td>
                    <td>
                        <i class="material-icons blue-text text-darken-2" style="cursor:pointer;"
                           onclick="location.href='FormClienteEdit.php?id=<?= $cliente->getId(); ?>'">
                            edit
                        </i>
                        <i class="material-icons grey-text text-darken-2" style="cursor:pointer;"
                           onclick="location.href='DetailCliente.php?id=<?= $cliente->getId(); ?>'">
                            details
                        </i>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
