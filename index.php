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
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav" style="margin-right:15em;">
        <a class="nav-link" aria-current="page" href="#">QUEM SOMOS</a>
        <a class="nav-link" href="#">EVENTOS</a>
        <a class="nav-link" href="#">EXPERIMENTOS</a>
        <a class="nav-link" >SEJA MEMBRO</a>
      </div>
    </div>
  </div>
</nav>


</header>

<main class="container d-flex flex-column align-items-center mt-5">
  <div class="card d-flex flex-column flex-lg-row-reverse mb-5" style="width: 100%; max-width: 53rem;">
    <div class="row g-0" style="width: 100%;">
      <!-- Imagem ocupando metade do card em telas médias e grandes -->
      <div class="col-12 col-md-6 col-lg-6 order-lg-2">
        <img class="card-img-right img-fluid h-100" src="images/masterclass.png" alt="Imagem do evento" style="object-fit: cover;">
      </div>

      <!-- Conteúdo do card -->
      <div class="col-12 col-md-6 col-lg-6 oder-lg-1">
        <div class="card-body d-flex flex-column justify-content-between h-100">
          <div>
            <h5 class="card-title">ATENÇÃO ALUNOS DO IFRN CNAT!</h5>
            <p class="card-text mt-4">Dia 16/11 vocês poderão atuar como físicos de partículas por um dia.</p>
          </div>
          <div class="d-flex justify-content-center mt-5">
            <a href="#" id="saibamais" class="btn btn-primary">SAIBA MAIS</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-3 mt-5 text-center text-lg-left" style="width: 100%;">
    <h3 style="color:white;">ÚLTIMOS EVENTOS</h3>
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
  

  <!-- <figure class="row mt-5 mb-5" style="position: relative; width: 100vw; height: auto; margin: 0; text-align: center;">
    <h2 style="position: absolute; top: 5%; left: 50%; transform: translateX(-50%); color:white;">CIENCIBUS</h2>
    <p style="position: absolute; top: 30%; left: 25%; transform: translate(-50%, 0); width: 40%; text-align: left; color:white;">Venha conhecer nosso laboratório móvel e embarcar nessa viagem científica.</p>
    
    Contêiner para centralizar o botão -->
    <!-- <div style="position: absolute; top: 60%; right: 25%; transform: translateX(0);">
        <a href="#" class="btn" style="font-size: 1.2rem;color:white; background-color:#05703A;">SAIBA MAIS</a>
    </div> -->
    
    <!-- <img src="images/retangulo.png" alt="Retângulo" style="width: 100%; height: auto; object-fit: cover;">
    
    <img src="images/onibus.png" alt="Ônibus" style="position: absolute; top: 22%; right: 5%; width: 50%; height: auto; object-fit: contain;">
  </figure>  --> 

  <figure class="d-flex align-items-center mt-5 mb-5">
    <img src="images/eistein.png" alt="Imagem de Einstein" style="max-width: 50%; height: auto; object-fit: cover;">
    <div class="ms-5 mb-5">
        <h2 style="color:white;">QUEM SOMOS NÓS?</h2>
        <p class="text-white fw-light">O clube de ciência do IFRN é um ambiente onde exala ciência e que visa nos mostrar que ela está em todos os lugares.</p>
    </div>
</figure>
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
