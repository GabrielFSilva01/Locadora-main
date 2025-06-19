<?php
namespace VIEW\Cliente;
require_once __DIR__ . '/../../DAL/Cliente.php';
require_once __DIR__ . '/../../MODEL/Cliente.php';




use DAL\Cliente;

$dalCliente = new Cliente();
$clientes = $dalCliente->Select();

?>






<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar clientes</title>
</head>
<body>
    <h1>Listagem geral de clientes </h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>data_cadastro</th>
            <th>Telefone</th>
        </tr>
        <?php 
        foreach ($clientes as $cliente) {?>
            <tr>
                <td> <?php echo $cliente->getId(); ?> </td>
                <td> <?php echo $cliente->getNome() ?> </td>
                <td> <?php echo $cliente->getEmail(); ?> </td>
                <td> <?php echo $cliente->getDataCadastro(); ?> </td>
                  <td> <?php echo $cliente->getTelefone(); ?> </td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>