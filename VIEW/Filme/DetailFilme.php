
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
    <title>Detalhes do Filme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <h4>Detalhes do Filme</h4>
        <ul class="collection">
            <li class="collection-item">ID: <?= $filme->getId() ?></li>
            <li class="collection-item">Título: <?= $filme->getTitulo() ?></li>
            <li class="collection-item">Gênero: <?= $filme->getGenero() ?></li>
            <li class="collection-item">Quantidade em Estoque: <?= $filme->getQtdEstoque() ?></li>
            <li class="collection-item">Status: <?= $filme->getStatus() ?></li>
        </ul>
        <a href="LstFilme.php" class="btn">Voltar</a>
    </div>
</body>
</html>
