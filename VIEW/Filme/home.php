<?php
require_once __DIR__.'/../../VIEW/menu.php';
$baseUrl = '/Locadora-main/VIEW';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home</title>
  <style>
    .home-img {
      display: block;
      margin: 30px auto;
      max-width: 400px;
      width: 100%;
      height: auto;
    }
    .center-text {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container center-text">
    <h1>Floresta Verde </h1>
    <img src="<?= $baseUrl ?>/img/locadora.jpg" alt="Imagem da Locadora" class="home-img">
    <p class="flow-text">
      Bem-vindo ao sistema de locadora Floresta verde ! Aqui você pode gerenciar clientes, filmes e locações de forma simples e eficiente.
    </p>
  </div>
</body>
</html>
