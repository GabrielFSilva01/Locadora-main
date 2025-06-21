
<?php
require_once __DIR__ . '/../../DAL/filme.php';
require_once __DIR__ . '/../../MODEL/filme.php';

$id = $_GET['id'];
$dalFilmes = new \DAL\Filme();
$filme = $dalFilmes->SelectById($id);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Filme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <h4>Editar Filme</h4>
        <form action="EditFilme.php" method="post">
            <input type="hidden" name="id" value="<?= $filme->getId() ?>">
            <div class="input-field">
                <input type="text" name="titulo" value="<?= $filme->getTitulo() ?>" required>
                <label class="active">Título</label>
            </div>
            <div class="input-field">
                <input type="text" name="genero" value="<?= $filme->getGenero() ?>" required>
                <label class="active">Gênero</label>
            </div>
            <div class="input-field">
                <input type="number" name="qtd_estoque" value="<?= $filme->getQtdEstoque() ?>" required>
                <label class="active">Quantidade em Estoque</label>
            </div>
            <div class="input-field">
                <input type="text" name="status" value="<?= $filme->getStatus() ?>" required>
                <label class="active">Status</label>
            </div>
            <button type="submit" class="btn blue">Atualizar</button>
            <a href="LstFilme.php" class="btn red">Cancelar</a>
        </form>
    </div>
</body>
</html>
