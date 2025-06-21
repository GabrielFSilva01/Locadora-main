<?php
require_once __DIR__ . '/../../DAL/filme.php';
require_once __DIR__ . '/../../MODEL/filme.php';

// Verificação básica para evitar undefined array key
$titulo = $_POST['titulo'] ?? null;
$genero = $_POST['genero'] ?? null;
$qtd_estoque = $_POST['qtd_estoque'] ?? null;
$status = $_POST['status'] ?? null;

// Se algum campo estiver vazio, exibe erro e para execução
if (!$titulo || !$genero || !$qtd_estoque || !$status) {
    die("Erro: Todos os campos (título, gênero, estoque, status) devem ser preenchidos.");
}

// Criação do objeto e atribuição dos dados
$filme = new \MODEL\Filme();
$filme->setTitulo($titulo);
$filme->setGenero($genero);
$filme->setQtdEstoque($qtd_estoque);
$filme->setStatus($status);

// Chamada para DAL
$dalFilmes = new \DAL\Filme();
$dalFilmes->Insert($filme);

// Redireciona para listagem
header("Location: LstFilme.php");
exit;
