<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Cadastrar Filme</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div class="row center-align">
      <h4 class="green-text text-darken-2">Cadastro de Novo Filme</h4>
    </div>

    <form action="InsFilmes.php" method="post" class="col s12 m8 offset-m2">
      <div class="input-field">
        <input type="text" name="titulo" id="titulo" required />
        <label for="titulo">Título</label>
      </div>

      <div class="input-field">
        <input type="text" name="genero" id="genero" required />
        <label for="genero">Gênero</label>
      </div>

      <div class="input-field">
        <input type="number" name="qtd_estoque" id="qtd_estoque" required min="0" />
        <label for="qtd_estoque">Quantidade em Estoque</label>
      </div>

      <div class="input-field">
        <input type="text" name="status" id="status" required />
        <label for="status">Status</label>
      </div>
      <div class="right-align">
        <button type="submit" class="btn green">Gravar</button>
        <a href="LstFilmes.php" class="btn red">Voltar</a>
      </div>

      <div class="row center-align">
        <button type="submit" class="btn green darken-2 waves-effect waves-light">
          Gravar <i class="material-icons right">check</i>
        </button>
        <a href="LstFilme.php" class="btn red darken-2 waves-effect waves-light">
          Cancelar <i class="material-icons right">cancel</i>
        </a>
      </div>
    </form>
  </div>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      M.updateTextFields();
    });
  </script>
</body>

</html>