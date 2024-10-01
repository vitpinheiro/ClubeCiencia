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
  <div class="card d-flex flex-row-reverse mb-5" style="width: 36rem; margin-bottom: 20px;">
    <img class="card-img-right" src="images/masterclass.png" alt="" style="width: 50%; object-fit: cover;">
    <div class="card-body">
      <h5 class="card-title">ATENÇÃO ALUNOS DO IFRN CNAT!</h5>
      <p class="card-text">Dia 16/11 vocês poderão atuar como físicos de partículas por um dia.</p>
      <a href="#" id="saibamais" class="btn">SAIBA MAIS</a>
    </div>
  </div>

  <div class="text-start mb-3">
    <h3 style="color:white;">ÚLTIMOS EVENTOS</h3>
  </div>
  
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card h-100">
        <img src="images/eclipse.png" class="card-img-top" alt="Evento 1" style="height: 150px; object-fit: cover;">
        <div id="eventos" class="card-body d-flex flex-column">
          <h5 class="card-title">ECLIPSE SOLAR ANULAR</h5>
          <p class="card-text">Descrição do evento 1.</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
      <div class="card h-100">
        <img src="images/bus.png" class="card-img-top" alt="Evento 2" style="height: 150px; object-fit: cover;">
        <div id="eventos" class="card-body d-flex flex-column">
          <h5 class="card-title">CIENCIBUS NA UF</h5>
          <p class="card-text">Descrição do evento 2.</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
      <div class="card h-100">
        <img src="images/duval.png" class="card-img-top" alt="Evento 3" style="height: 150px; object-fit: cover;">
        <div id="eventos" class="card-body d-flex flex-column">
          <h5 class="card-title">VISITA DA CASA DURVAL PAIVA</h5>
          <p class="card-text">Descrição do evento 3.</p>
        </div>
      </div>
    </div>
  </div>
</main>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
