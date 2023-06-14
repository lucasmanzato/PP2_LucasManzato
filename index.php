<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instituto Mente Sã</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">
  <style>
    .carousel-container {
      background-color: rgb(188, 188, 188);
    }
  </style>
</head>

<body>

  <?php include "header.php"; ?>

  <div class="container-fluid carousel-container align-center mt-3">
  <div class="row">
    <div>
      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Imagens/terapia1.png" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Imagens/terapia2.png" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Imagens/terapia3.png" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </a>
      </div>
    </div>
  </div>
</div>
  <main class="main-index">
    <div class="quem-somos">

      <div class="jumbotron jumbotron-fluid sty">
        <div class="container">
          <h1 class="display-4">Sobre o Instituto Mente Sã</h1>
          <p class="lead">O Instituto Mente Sã é uma plataforma dedicada a fornecer suporte psicológico e emocional de forma prática e acessível.
            Nossa missão é auxiliar pessoas que buscam ajuda psicológica a encontrar profissionais capacitados e obter o suporte
            necessário sem sair de casa.</p>
          <p class="lead">Utilizando as mais recentes tecnologias de comunicação online, oferecemos um ambiente seguro e confidencial para sessões
            terapêuticas, permitindo que você receba atendimento psicológico onde e quando precisar.</p>
          <h1 class="display-4">Como Funciona</h1>
          <p class="lead">No Instituto Mente Sã, você tem a liberdade de escolher o profissional de sua preferência. Nossa plataforma apresenta
            uma lista de psicólogos especializados, cada um com sua descrição, área de atuação e abordagem terapêutica.</p>
          <p class="lead">Após escolher um profissional, você pode entrar em contato através dos canais disponibilizados, e-mail ou telefone,
            para verificar a disponibilidade e agendar uma sessão de atendimento. Nossos profissionais estão prontos para ajudar e
            oferecer o suporte emocional necessário para lidar com as questões que você está enfrentando.</p>

        </div>
      </div>
    </div>

  </main>

  <?php include 'Footer.php'; ?>

  <!-- Link para o jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Link para o arquivo JavaScript do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>

</html>