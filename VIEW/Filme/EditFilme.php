
<?php
require_once __DIR__ . '/../../DAL/filme.php';
require_once __DIR__ . '/../../MODEL/filme.php';

$filme = new \MODEL\Filme();
$filme->setId($_POST['id']);
$filme->setTitulo($_POST['titulo']);
$filme->setGenero($_POST['genero']);
$filme->setQtdEstoque($_POST['qtd_estoque']);
$filme->setStatus($_POST['status']);

$dalFilmes = new \DAL\Filme();
$dalFilmes->update($filme);

header("Location: LstFilme.php");
exit;
