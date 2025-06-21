<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sistema Locadora</title>

  <!-- Materialize CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <style>
    .logo-img {
      height: 50px;
      margin-right: 15px;
      vertical-align: middle;
    }
    .brand-logo {
      display: flex;
      align-items: center;
    }
    .sidenav .user-view .background {
      background-color: #2e7d32; /* mesma cor do navbar */
    }
  </style>

  <?php
    $baseUrl = '/Locadora-main/VIEW';
  ?>
</head>
<body>

  <!-- Navbar principal -->
  <nav class="green darken-3">
    <div class="nav-wrapper container">
      <!-- Botão mobile -->
      <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
      
      <a href="#" class="brand-logo">
        <img src="<?= $baseUrl ?>/img/floresta_1.jpg" alt="Logo" class="logo-img">
        Locadora
      </a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?= $baseUrl ?>/Filme/home.php"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="<?= $baseUrl ?>/Cliente/Lstcliente.php"><i class="material-icons left">person</i>Clientes</a></li>
        <li><a href="<?= $baseUrl ?>/Filme/LstFilme.php"><i class="material-icons left">movie</i>Filmes</a></li>
        <li><a href="<?= $baseUrl ?>/Locacao/Lstlocacao.php"><i class="material-icons left">assignment</i>Locações</a></li>
      </ul>
    </div>
  </nav>

  <!-- Sidenav mobile -->
  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view">
        <div class="background"></div>
        <a href="#user"><img class="circle" src="<?= $baseUrl ?>/img/cyberpunk.jpg"></a>
        <a href="#name"><span class="white-text name">Gabriel Ferreira</span></a>
        <a href="#email"><span class="white-text email">gabrielknightdark@outlook.com</span></a>
      </div>
    </li>
    <li><a href="<?= $baseUrl ?>/Filme/home.php"><i class="material-icons">home</i>Home</a></li>
    <li><a href="<?= $baseUrl ?>/Cliente/Lstcliente.php"><i class="material-icons">person</i>Clientes</a></li>
    <li><a href="<?= $baseUrl ?>/Filme/LstFilme.php"><i class="material-icons">movie</i>Filmes</a></li>
    <li><a href="<?= $baseUrl ?>/Locacao/Lstlocacao.php"><i class="material-icons">assignment</i>Locações</a></li>
  </ul>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.sidenav');
      M.Sidenav.init(elems);
    });
  </script>
<!-- Scripts Materialize + Inicialização -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?= $baseUrl ?>/js/init.js"></script>

</body>
</html>
