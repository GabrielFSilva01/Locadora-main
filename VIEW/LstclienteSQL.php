<?php
require_once __DIR__ . '/../DAL/Conexao.php';


use DAL\Conexao;

$sql = "SELECT * FROM cliente";
$con = Conexao::conectar();
$registros = $con->query($sql);
Conexao::desconectar();
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
        foreach ($registros as $linha) {?>
            <tr>
                <td> <?php echo $linha['id']; ?> </td>
                <td> <?php echo $linha['nome'] ?> </td>
                <td> <?php echo $linha['email']; ?> </td>
                <td> <?php echo $linha['data_cadastro']; ?> </td>
                  <td> <?php echo $linha['telefone']; ?> </td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>