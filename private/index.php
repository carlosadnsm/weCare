<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>weCare</title>
  <link rel="stylesheet" href="../style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">weCare</a>

        <form class="d-flex mx-auto">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
        <div class="navbar-nav ms-auto">
          <a class="nav-link" id="buttonLogin" href="login.php"><i class="bi bi-person"></i> Login</a>
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
    <div class="container">

      <div class="headerText">
        <h1 class="text-center home">weCare: o smartwatch que cuida de quem você ama</h1>
        <p class="lead text-center"><cite>weCare</cite> é um smartwatch com monitoramento com foco para pessoas idosas, que permite
          que
          você acompanhe a saúde e o bem-estar do seu familiar a distância.</p>
      </div>

      <div class="mainText">
        <div class="row">
          <div class="col-md-6">
            <img src="images/presente.jpeg" alt="Pai presenteando um filho com um relógio de nossa marca"
              class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="home">Como funciona?</h2>
            <p><cite>weCare</cite> é um smartwatch que mede os batimentos cardíacos, a qualidade do sono, a localização e outros
              dados
              vitais do seu familiar idoso. Esses dados são enviados para o seu smartphone através de um aplicativo, que
              também possui um assistente para caso de riscos.</p>
            <p>Por exemplo, se o <cite>weCare</cite> detectar um aumento drástico de frequência cardíaca, ele pode emitir uma ligação
              ou
              notificação para você, alertando sobre uma possível emergência. Você também pode conversar com o seu
              familiar
              pelo weCare, usando o microfone e o alto-falante integrados.</p>
            <p>Além disso, o <cite>weCare</cite> possui um design moderno e confortável, com uma tela sensível ao toque e uma bateria
              de
              longa duração. O <cite>weCare</cite> é resistente à água e ao suor, podendo ser usado em qualquer situação.</p>
          </div>
        </div>
      </div>

      <div class="textQuestions">
        <div class="row">
          <div class="col-md-12">
            <h2 class="home">Por que escolher o weCare?</h2>
            <ul>
              <li>O weCare é mais do que um smartwatch, é um dispositivo que cuida de quem você ama. Com o <cite>weCare</cite>, você
                pode:</li>
              <li>Acompanhar a saúde e o bem-estar do seu familiar idoso a distância, recebendo dados em tempo real.
              </li>
              <li>Receber alertas em caso de riscos ou emergências, podendo agir rapidamente.</li>
              <li>Conversar com o seu familiar pelo weCare, mantendo uma comunicação constante.</li>
              <li>Oferecer ao seu familiar um smartwatch moderno e confortável, que ele vai adorar usar.</li>
            </ul>
            <div class="text-fluid">
            <p>Não perca tempo e adquira já o seu <cite>weCare</cite>. O smartwatch que cuida de quem você ama.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <footer class="row">
      Todos os direitos reservados 2023
  </footer>

</body>

</html>