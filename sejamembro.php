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
        <a class="nav-link" href="#">EXPERIMENTOS</a>
        <a class="nav-link"  href="sejamembro.php">SEJA MEMBRO</a>
      </div>
    </div>
  </div>
</nav>


</header>

<main class="container d-flex flex-column  mt-5">

<h2 style="color:white;">EQUIPE</h2>
<div id="accordionExample">
  <p class="d-inline-flex gap-1">
    <a class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Professores</a>
    <a class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Alunos</a>
  </p>
  <div class="row">
    <div class="col">
      <div class="collapse" id="multiCollapseExample1" data-bs-parent="#accordionExample">
        
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="collapse" id="multiCollapseExample2" data-bs-parent="#accordionExample">
        <div class="card card-body">
          Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger for Alunos.
        </div>
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
