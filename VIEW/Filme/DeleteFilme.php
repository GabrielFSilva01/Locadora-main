
<?php
require_once __DIR__ . '/../../DAL/filme.php';

$id = $_GET['id'];
$dalFilmes = new \DAL\Filme();
$dalFilmes->delete($id);

header("Location: LstFilme.php");
if ($dal->TemAlugueisVinculados($id)) {
    echo "Não é possível excluir o filme pois ele está vinculado a um ou mais aluguéis.";
    exit;
} else {
    $dal->Delete($id);
    header("Location: LstFilmes.php");
}

exit;
