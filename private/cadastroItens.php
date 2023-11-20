<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weCare</title>
    <link rel="stylesheet" href="../style.css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-
    4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous">
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="script.js" type="module"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">weCare</a>

            <form class="d-flex mx-auto">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="login.php"><i class="bi bi-person"></i> Login</a>
            </div>
        </div>
    </nav>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../itens.php">Itens</a></li>
            <li><a href="../sobre.php">Sobre</a></li>
            <li><a href="../cadastro.php">Cadastro</a></li>
        </ul>
    </nav>
        <div class="container mt-5">
            <h1 class="mb-4">Cadastro de Item</h1>
            <form  method="post" action="scripts/cadastro.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" maxlength="100">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Preço:</label>
                    <input type="text" class="form-control" id="preco" name="preco" maxlength="100">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Descricao:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" maxlength="100">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" id="botao">Enviar</button>
                </div>
            </form>
    </main>
    <footer class="fixed-bottom">
        Todos os direitos reservados 2023
    </footer>
</body>

</html>