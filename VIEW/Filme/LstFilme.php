<?php
namespace VIEW\Filme;

require_once __DIR__ . '/../../DAL/filme.php';
require_once __DIR__ . '/../../MODEL/filme.php';

use DAL\Filme;

$dalFilme = new Filme();
$filmes = $dalFilme->Select();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Listagem de Filmes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
  <h4 class="center green-text">Listagem de Filmes</h4>
  <table class="striped highlight">
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Qtd. Estoque</th>
        <th>Status</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($filmes as $filme) { ?>
        <tr>
          <td><?= $filme->getId() ?></td>
          <td><?= $filme->getTitulo() ?></td>
          <td><?= $filme->getGenero() ?></td>
          <td><?= $filme->getQtdEstoque() ?></td>
          <td><?= $filme->getStatus() ?></td>
          <td>
            <a href="DetailFilme.php?id=<?= $filme->getId() ?>" class="btn-small blue">Detalhes</a>
            <a href="FormFilmeEdit.php?id=<?= $filme->getId() ?>" class="btn-small orange">Editar</a>
            <a href="DeleteFilme.php?id=<?= $filme->getId() ?>" class="btn-small red" onclick="return confirm('Deseja excluir este filme?')">Excluir</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <div class="center">
    <a href="FormFilme.php" class="btn green">Novo Filme</a>
  </div>
</div>
</body>
</html>
