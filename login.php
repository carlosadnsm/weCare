<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>weCare</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <script src="script.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">weCare</a>
    
                <form class="d-flex mx-auto">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
    
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="login.html"><i class="bi bi-person"></i> Login</a>
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
        <nav style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 login-container"></div>
                    <div class="col-md-5">
                        <div class="login-form">
                        <form action="scripts/login.php" method="post">
                                <fieldset" style="color: green;">Login</fieldset>
                                <div class="form-floating mb-3 ">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="">
                                    <label for="email" style="color: green;">E-mail</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="senha" id="senha" placeholder="">
                                    <label for="senha" style="color: green;">Senha</label>
                                </div>                    
                                <button type="submit" id="login" class="btn btn-success col-5">Entrar</button>
                                <div>
                                    <a class="text-allign" href="cadastro.html" style="color: green;">Não possui cadastro?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <footer class="fixed-bottom">
            Todos os direitos reservados 2023
        </footer>
    </body>
</html>