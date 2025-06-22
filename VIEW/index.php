<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Locadora Floresta Verde</title>

  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@700&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #1b5e20;
      color: white;
      font-family: 'Kaushan Script', cursive;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .card-login {
      background: white;
      border-radius: 10px;
      padding: 30px;
      color: black;
      width: 100%;
      max-width: 400px;
    }

    .input-field input[type="text"],
    .input-field input[type="password"] {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
    }

    .btn-custom {
      background-color: #2e7d32;
      border-radius: 25px;
    }

    .btn-custom:hover {
      background-color: #1b5e20;
    }

    .login-title {
      text-align: center;
      margin-bottom: 25px;
      font-size: 2rem;
    }
  </style>
</head>
<body>

  <div class="card-login z-depth-3">
    <div class="login-title">Login</div>

    <!-- ✅ Correção feita no caminho da action abaixo -->
    <form action="Auth/ValidaLogin.php" method="POST">
      <div class="input-field">
        <input type="text" id="usuario" name="usuario" required>
        <label for="usuario">Usuário</label>
      </div>
      <div class="input-field">
        <input type="password" id="password" name="password" required>
        <label for="password">Senha</label>
      </div>
      <div class="center">
        <button type="submit" class="btn btn-custom waves-effect waves-light">Entrar</button>
      </div>
    </form>
  </div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
