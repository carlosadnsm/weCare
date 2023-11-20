<?php

require "utils/connection.php";

$pdo = mysqlConnect();

try {
    $sql = "SELECT * FROM PRODUCT_ITEM";

    $result = $pdo->query($sql);
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
    <title>weCare</title>
    <link rel="stylesheet" href="../style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">weCare</a>

            <form class="d-flex mx-auto">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" id="pesq">
                <button class="btn btn-outline-success search-btn" type="submit" id="search-btn" onclick="buscar(event)">Pesquisar</button>
            </form>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="login.php"><i class="bi bi-person"></i> Login</a>
            </div>
        </div>
    </nav>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="itens.php">Itens</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>

        </ul>
    </nav>

    <main>

        <div class="container">


                <?php

                while ($row = $result->fetch()) {

                    $nome = $row['PRODUCT_NAME'];
                    $preco = $row['PRICE'];
                    $descricao = $row['DESCRIPTION'];

                    echo <<<HTML
                         <div class = "item" id = "item">
                            <img src="../images/produto1.jpeg" alt="Produto" style="max-width: 200px; height: auto;">
                            <div style="margin-left: 20px;">
                            <h2 class="tituloProduto">$nome</h2>
                            <p>$descricao</p>
                            </div>
                            <div style="margin-right: 20px;">
                            <p>$preco</p>
                            </div>
                        </div>
                        HTML;
                }
                ?>

            </ul>
        </div>
    </main>
</body>
<footer class="fixed-bottom">
    Todos os direitos reservados <cite>weCare</cite> 2023 
</footer>

</html>