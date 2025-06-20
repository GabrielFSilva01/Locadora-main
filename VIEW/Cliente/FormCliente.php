<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Novo Cliente</title>

  <!-- Materialize CSS -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
  />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col s12 center-align">
        <h4 class="green-text text-darken-4">Cadastro de Clientes</h4>
      </div>
    </div>

    <div class="row">
      <form
        action="InsCliente.php"
        method="post"
        class="col s12 m8 offset-m2 l6 offset-l3"
      >
        <!-- Nome -->
        <div class="row">
          <div class="input-field col s12">
            <input type="text" id="nome" name="nome" required />
            <label for="nome">Nome</label>
          </div>
        </div>

        <!-- Email -->
        <div class="row">
          <div class="input-field col s12">
            <input
              type="email"
              id="email"
              name="email"
              class="validate"
              required
            />
            <label for="email">Email</label>
            <span
              class="helper-text"
              data-error="E-mail inválido"
              data-success="E-mail válido"
            ></span>
          </div>
        </div>

        <!-- Telefone -->
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="telefone" id="telefone" required>
            <label for="telefone">Telefone</label>
          </div>
        </div>

        <!-- Data Cadastro -->
        <div class="row">
          <div class="input-field col s12">
            <input type="date" id="data_cadastro" name="data_cadastro" required />
            <label for="data_cadastro" class="active">Data de Cadastro</label>
          </div>
        </div>

        <!-- Botões -->
        <div class="row center-align">
          <div class="col s12 m4">
            <button
              class="btn waves-effect waves-light green darken-2"
              type="submit"
              name="action"
              style="width: 100%"
            >
              Gravar
              <i class="material-icons right">send</i>
            </button>
          </div>

          <div class="col s12 m4">
            <button
              class="btn waves-effect waves-light red darken-2"
              type="reset"
              name="clear"
              style="width: 100%"
            >
              Limpar
              <i class="material-icons right">clear_all</i>
            </button>
          </div>

          <div class="col s12 m4">
            <a
              href="Lstcliente.php"
              class="btn waves-effect waves-light amber darken-2"
              style="width: 100%"
            >
              Voltar
              <i class="material-icons right">arrow_back</i>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      M.updateTextFields();
    });
  </script>
</body>
</html>
