<?php

session_start();

require "utils/connection.php";

$pdo = mysqlConnect();
$customerID = $_SESSION["customer_id"];

try {
  $sql = "SELECT * FROM CUSTOMER WHERE CUSTOMER_ID = :id ";
  $stmt = $pdo->prepare($sql);

  $stmt->bindParam(':id', $customerID);

  $result = $stmt->fetch();
} catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Painel de Controle <cite>weCare</cite></title>

  <link rel="stylesheet" href="../style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="../script.js"></script>

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="../index.php">weCare</a>

        <form class="d-flex mx-auto">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>

        <div class="navbar-nav ms-auto">

          <a class="nav-link" id="buttonLogin" href="../login.php">
            <button type="button" class="btn btn-outline-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z">
                </path>
                <path fill-rule="evenodd"
                  d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z">
                </path>
              </svg>
              Sair
            </button>
          </a>

        </div>
      </div>
    </nav>
    <nav>
      <ul>
        <li><a href="../scripts/getCostumers.php">Usuarios</a></li>
        <li><a href="../scripts/getProducts.php">Itens</a></li>
        <li><a href="profile.php">Perfil</a></li>
        <li><a href="cadastro.php">Cadastro de Item</a></li>
      </ul>
    </nav>


  </header>

  <main>

    <div class="main-profile">

      <div class="container text-center">

        <h1 class="fw-light">Perfil</h1>

        <div class="d-flex justify-content-between">

          <?php

          while ($row = $result->fetch()) {

            $nome = $row['CUSTOMER_NUMBER'];

            echo <<<HTML
                    <div class="col-lg">

                      <img src="../images/no-picture-profile.jpeg" alt="Foto de Perfil" width="300px">

                      <div class="">
                        <h3 class="text-center">Painel de Controle</h3>
                      </div>

                      <h5 class="text-fluid"> Usuario Teste da Silva </h5>

                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-danger" name="exclude-profile">Excluir Perfil</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" name="edit-picture">Editar Foto</button>
                      </div>

                    </div>
                  HTML;
          }
          ?>

        </div>

      </div>

    </div>
  </main>

  <footer class="fixed-bottom">
    Todos os direitos reservados <cite>weCare</cite> 2023 
  </footer>
</body>

</html>