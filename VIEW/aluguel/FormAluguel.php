<?php
require_once __DIR__ . '/../../DAL/cliente.php';
require_once __DIR__ . '/../../DAL/filme.php';

$dalCliente = new \DAL\Cliente();
$listaClientes = $dalCliente->Select();

$dalFilme = new \DAL\Filme();
$listaFilmes = $dalFilme->Select();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Aluguel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container">
    <h4 class="center-align">Cadastrar Novo Aluguel</h4>
    <form action="InsAluguel.php" method="post">
        <div class="input-field">
            <select name="cliente_id" required>
                <option value="" disabled selected>Selecione um cliente</option>
                <?php foreach ($listaClientes as $cliente): ?>
                    <option value="<?= $cliente->getId() ?>"><?= $cliente->getNome() ?></option>
                <?php endforeach; ?>
            </select>
            <label>Cliente</label>
        </div>
        <div class="input-field">
            <select name="filme_id" required>
                <option value="" disabled selected>Selecione um filme</option>
                <?php foreach ($listaFilmes as $filme): ?>
                    <option value="<?= $filme->getId() ?>"><?= $filme->getTitulo() ?></option>
                <?php endforeach; ?>
            </select>
            <label>Filme</label>
        </div>
        <div class="input-field">
            <input type="date" name="data_aluguel" required>
            <label class="active">Data do Aluguel</label>
        </div>
        <div class="input-field">
            <input type="date" name="data_dev" required>
            <label class="active">Data de Devolução</label>
        </div>
        <div class="center-align">
            <button type="submit" class="btn green">Gravar</button>
            <a href="LstAluguel.php" class="btn amber darken-2">Voltar</a>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });
</script>
</body>
</html>
