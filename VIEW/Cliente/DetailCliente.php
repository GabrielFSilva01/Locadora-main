<?php
require_once __DIR__ . '/../../DAL/Cliente.php';
require_once __DIR__ . '/../../MODEL/Cliente.php';
$id = $_GET['id'];
//echo"id" . $id;
$dalCliente = new DAL\Cliente();
$cliente = $dalCliente->SelectById($id);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Detalhes do Cliente</title>

  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col s12 center-align">
        <h4 class="green-text text-darken-4">Detalhes do cliente </h4>
      </div>
    </div>

    <input type="hidden"  name="id" value="<?php echo $id; ?>">
     <h5>ID:<?php echo $cliente->getId() ?> </h5>
    <h5>Nome: <?php echo $cliente->getNome()?> </h5>
    <h5>email: <?php echo $cliente->getEmail()?> </h5>
    <h5>Telefone: <?php echo $cliente->getTelefone()?> </h5>
    <h5>Data de Cadastro: <?php echo $cliente->getDataCadastro()?> </h5>

        <!-- Botões -->
        <div class="row center-align">
          <div class="col s12 m4">
            <button class="btn waves-effect waves-light black darken-2" type="button"
               onclick="location.href='FormClienteEdit.php?id='+'<?php echo $id ?>'">
              editar
              <i class="material-icons right"
           >edit</i>
            </button>
          </div>

          <div class="col s12 m4">
            <button class="btn waves-effect waves-light red darken-2" type="button"
            onclick="JavaScript:Remover(<?php echo $cliente->getId() ?>)">
              Remover
              <i class="material-icons right">delete</i>
            </button>
          </div>

          <div class="col s12 m4">
            <a href="Lstcliente.php" class="btn waves-effect waves-light amber darken-2" type="button">
              Voltar
              <i class="material-icons right">arrow_back</i>
            </a>
          </div>
        </div>
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
<script>
    function Remover(id) {
        if (confirm("Deseja realmente remover o cliente?")) {
            location.href = "DeleteCliente.php?id=" + id;
        }
    }
</script>