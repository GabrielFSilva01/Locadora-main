<?php
require_once __DIR__ . '/../../DAL/Cliente.php';
require_once __DIR__ . '/../../MODEL/Cliente.php';
require_once __DIR__.'/../../VIEW/menu.php';
use VIEW\Filme\Menu;

$id = $_GET['id'] ?? null;

$dalCliente = new DAL\Cliente();
$cliente = $dalCliente->SelectById($id);

if (!$cliente) {
    echo "Cliente não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Editar Cliente</title>

  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col s12 center-align">
        <h4 class="green-text text-darken-4">Edição de Cliente</h4>
      </div>
    </div>

    <div class="row">
      <form action="EditCliente.php" method="post" class="col s12 m8 offset-m2 l6 offset-l3">
        <input type="hidden" name="id" value="<?php echo $cliente->getId(); ?>" />

        <!-- Nome -->
        <div class="row">
          <div class="input-field col s12">
            <input id="nome" name="nome" type="text" required value="<?php echo htmlspecialchars($cliente->getNome()); ?>">
            <label for="nome" class="active">Nome</label>
          </div>
        </div>

        <!-- Email -->
        <div class="row">
          <div class="input-field col s12">
            <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($cliente->getEmail()); ?>">
            <label for="email" class="active">Email</label>
            <span class="helper-text" data-error="E-mail inválido" data-success="E-mail válido"></span>
          </div>
        </div>

        <!-- Telefone -->
        <div class="row">
          <div class="input-field col s12">
            <input type="text" id="telefone" name="telefone" required value="<?php echo htmlspecialchars($cliente->getTelefone()); ?>">
            <label for="telefone" class="active">Telefone</label>
          </div>
        </div>

        <!-- Data Cadastro -->
        <div class="row">
          <div class="input-field col s12">
            <input type="date" id="data_cadastro" name="data_cadastro" required value="<?php echo $cliente->getDataCadastro(); ?>">
            <label for="data_cadastro" class="active">Data de Cadastro</label>
          </div>
        </div>

        <!-- Botões -->
        <div class="row center-align">
          <div class="col s12 m4">
            <button class="btn waves-effect waves-light green darken-2" type="submit">
              Gravar
              <i class="material-icons right">send</i>
            </button>
          </div>

          <div class="col s12 m4">
            <button class="btn waves-effect waves-light red darken-2" type="reset">
              Limpar
              <i class="material-icons right">clear_all</i>
            </button>
          </div>

          <div class="col s12 m4">
            <a href="Lstcliente.php" class="btn waves-effect waves-light amber darken-2">
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
