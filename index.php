<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Instituto Mente Sã</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <div class="logo">
      <a href="index.php"><img src="Imagens/Logo2.png" alt="LogoMS" ></a>
    </div>
    <nav>
      <ul>
        <li><a href="index.php" class="ativo" >Home</a></li>
        <li><a href="profissionais.php" class="Bheader">Profissionais</a></li>
        <li><a href='contato.php' class="Bheader" >Contato</a></li>
      </ul>
    </nav>
  </header>

  <main class="main-index">
    <div class="hero-section">
      <div class="hero-content">
        <h1>Bem-vindo,</h1>
        <h1> Instituto Mente Sã!</h1>
      </div>
      <img src="Imagens/terapiafundo3.png" alt="Imagemfundo">
    </div>

    <div class="quem-somos">
    <h2>Sobre o Instituto Mente Sã</h2>
    <p>O Instituto Mente Sã é uma plataforma dedicada a fornecer suporte psicológico e emocional de forma prática e acessível.
       Nossa missão é auxiliar pessoas que buscam ajuda psicológica a encontrar profissionais capacitados e obter o suporte 
       necessário sem sair de casa.</p>
    <p>Utilizando as mais recentes tecnologias de comunicação online, oferecemos um ambiente seguro e confidencial para sessões 
      terapêuticas, permitindo que você receba atendimento psicológico onde e quando precisar.</p>

    <h2>Como Funciona</h2>
    <p>No Instituto Mente Sã, você tem a liberdade de escolher o profissional de sua preferência. Nossa plataforma apresenta 
      uma lista de psicólogos especializados, cada um com sua descrição, área de atuação e abordagem terapêutica.</p>
    <p>Após escolher um profissional, você pode entrar em contato através dos canais disponibilizados, e-mail ou telefone, 
      para verificar a disponibilidade e agendar uma sessão de atendimento. Nossos profissionais estão prontos para ajudar e 
      oferecer o suporte emocional necessário para lidar com as questões que você está enfrentando.</p>
</div>


    <aside class="sidebar">
    <h2>Profissionais</h2>
    <div class="professional-buttons">
      <a href="profissionais.php#joaosilva" class="professional-button"> Dr. João Silva </a>
      <a href="profissionais.php#mariasantos" class="professional-button">Dra. Maria Santos</a>
      <a href="profissionais.php#pedroalmeida" class="professional-button">Dr. Pedro Almeida</a>
      <a href="profissionais.php#anaoliveira" class="professional-button">Dra. Ana Oliveira</a>
      <a href="profissionais.php#carlossouza" class="professional-button">Dr. Carlos Souza</a>
      <a href="profissionais.php#lauraferreira" class="professional-button">Dra. Laura Ferreira</a>
      <a href="profissionais.php#andreramos" class="professional-button">Dr. André Ramos</a>
      <a href="profissionais.php#sofiapereira" class="professional-button">Dra. Sofia Pereira</a>
      <a href="profissionais.php#miguelcosta" class="professional-button">Dr. Miguel Costa</a>
      <a href="profissionais.php#carolinamendes" class="professional-button">Dra. Carolina Mendes</a>
      <img src="Imagens/atencao1.png" class="atencao" alt="Atenção">
      <p class="emerg">Para emergências, ligue para o CVV 188</p>
    </div>
  </aside>

  </main>

  <?php include 'Footer.php'; ?>

</body>
</html>
