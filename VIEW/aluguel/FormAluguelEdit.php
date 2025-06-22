<?php
require_once __DIR__ . '/../../DAL/Aluguel.php';
require_once __DIR__ . '/../../MODEL/Aluguel.php';

$dalAluguel = new \DAL\AluguelDAL();
$aluguel = $dalAluguel->SelectById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluguel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container">
    <h4 class="center-align">Editar Aluguel</h4>
    <form action="EditAluguel.php" method="POST" class="col s12">
        <input type="hidden" name="id" value="<?= $aluguel->getId() ?>">

        <div class="row">
            <div class="input-field col s12">
                <input type="number" id="cliente_id" name="cliente_id" required value="<?= $aluguel->getClienteId() ?>">
                <label for="cliente_id" class="active">ID do Cliente</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="number" id="filme_id" name="filme_id" required value="<?= $aluguel->getFilmeId() ?>">
                <label for="filme_id" class="active">ID do Filme</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="date" id="data_aluguel" name="data_aluguel" required value="<?= $aluguel->getDataAluguel() ?>">
                <label for="data_aluguel" class="active">Data do Aluguel</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="date" id="data_dev" name="data_dev" required value="<?= $aluguel->getDataDev() ?>">
                <label for="data_dev" class="active">Data de Devolução</label>
            </div>
        </div>

        <div class="row center-align">
            <button type="submit" class="btn green">Salvar</button>
            <a href="LstAluguel.php" class="btn red">Cancelar</a>
        </div>
    </form>
</div>
</body>
</html>
