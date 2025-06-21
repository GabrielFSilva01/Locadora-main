<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Locadora - Página Principal</title>

  <!-- Materialize CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <style>
    .brand-logo img {
      height: 50px;
      vertical-align: middle;
      margin-right: 10px;
    }
    .brand-logo span {
      vertical-align: middle;
      font-weight: bold;
      font-size: 22px;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="green darken-3">
    <div class="nav-wrapper container">
      <!-- Logo à esquerda com texto -->
      <a href="index.php" class="brand-logo">
        <img src="assets/logo.png" alt="Logo Locadora" class="circle">
        <span>Locadora</span>
      </a>

      <!-- Ícone hamburguer para mobile -->
      <a href="#" data-target="mobile-nav" class="sidenav-trigger right">
        <i class="material-icons">menu</i>
      </a>

      <!-- Menu desktop -->
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons left">home</i>Início</a></li>
        <li><a href="Cliente/Lstcliente.php"><i class="material-icons left">people</i>Clientes</a></li>
        <li><a href="Filmes/Lstfilmes.php"><i class="material-icons left">movie</i>Filmes</a></li>
        <li><a href="Alugueis/Lstalugueis.php"><i class="material-icons left">shopping_cart</i>Aluguéis</a></li>
        <li><a href="Sobre.php"><i class="material-icons left">info</i>Sobre</a></li>
      </ul>
    </div>
  </nav>

  <!-- Menu Mobile -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="index.php"><i class="material-icons">home</i>Início</a></li>
    <li><a href="Cliente/Lstcliente.php"><i class="material-icons">people</i>Clientes</a></li>
    <li><a href="Filmes/Lstfilmes.php"><i class="material-icons">movie</i>Filmes</a></li>
    <li><a href="Alugueis/Lstalugueis.php"><i class="material-icons">shopping_cart</i>Aluguéis</a></li>
    <li><a href="Sobre.php"><i class="material-icons">info</i>Sobre</a></li>
  </ul>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      M.Sidenav.init(document.querySelectorAll('.sidenav'));
    });
  </script>

</body>
</html>
