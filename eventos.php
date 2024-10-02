<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="a">
<header>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid" style="background-color: #4958DC;">
    <a class="navbar-brand" id="logo" href="index.php"><img src="images/logosimbolo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav" style="margin-right:15em;">
        <a class="nav-link" aria-current="page" href="quemsomos.php">QUEM SOMOS</a>
        <a class="nav-link" href="eventos.php">EVENTOS</a>
        <a class="nav-link" href="experimentos.php">EXPERIMENTOS</a>
        <a class="nav-link" href="sejamembro.php">SEJA MEMBRO</a>
      </div>
    </div>
  </div>
</nav>


</header>

<main class="container d-flex flex-column align-items-center mt-5">


  <div class="mb-3 mt-1 text-center text-lg-left" style="width: 100%;">
    <h3 style="color:white;">PRÓXIMOS EVENTOS</h3>
  </div>

  <div class="row">
    <div class="col-12 col-md-4 mb-3">
      <div class="card h-100">
        <img src="images/eclipse.png" class="card-img-top img-fluid" alt="Evento 1" style="height: 150px; object-fit: cover;">
        <div id="eventos" class="card-body d-flex flex-column">
          <h5 class="card-title">ECLIPSE SOLAR ANULAR</h5>
          <p class="card-text">Descrição do evento 1.</p>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-4 mb-3">
      <div class="card h-100">
        <img src="images/bus.png" class="card-img-top img-fluid" alt="Evento 2" style="height: 150px; object-fit: cover;">
        <div id="eventos" class="card-body d-flex flex-column">
          <h5 class="card-title">CIENCIBUS NA UF</h5>
          <p class="card-text">Descrição do evento 2.</p>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-4 mb-3">
      <div class="card h-100">
        <img src="images/duval.png" class="card-img-top img-fluid" alt="Evento 3" style="height: 150px; object-fit: cover;">
        <div id="eventos" class="card-body d-flex flex-column">
          <h5 class="card-title">VISITA DA CASA DURVAL PAIVA</h5>
          <p class="card-text">Descrição do evento 3.</p>
        </div>
      </div>
    </div>
  </div>
  


</main>

<footer>
    <section class="logos">
        <figure><a href="index.html"><img src="images/logo2.png" alt="Logo"></a></figure>
        <figure class="social">
            <img class="insta" src="images/instagram.png" alt="Instagram" fill="currentColor" id="insta">
            <img src="images/youtube.png" alt="YouTube">
            <img src="images/facebook.png" alt="Facebook">
        </figure>
    </section>
    <section class="info">
        <div>
            <h3>Institucional</h3>
            <ol>
                <a href="#">
                    <li>Sobre</li>
                </a>
                <a href="#">
                    <li>Contato</li>
                </a>
            </ol>
        </div>
        <div>
            <h3>Conheça</h3>
            <ol>
                <a href="#">
                    <li>Projetos</li>
                </a>
                <a href="#">
                    <li>Parceiros</li>
                </a>
            </ol>
        </div>
        <div>
            <h3>Localização</h3>
            <p>Av. Sen. Salgado Filho, 1559 - Tirol, Natal - RN, 59015-000</p>
        </div>
        <div class="assinatura">
            <p>@2023, Vitória Pinheiro</p>
        </div>
    </section>
</footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
