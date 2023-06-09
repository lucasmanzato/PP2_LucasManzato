<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">

  <title>Profissionais</title>
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section id="profissionais">
      <h2 class="h2-mobile">Nossos Profissionais</h2>
      <div class="portfolio">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/joaosilva.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dr. João Silva</h3>
            <p class="card-text">Formação: Graduação em Psicologia</p>
            <p class="card-text">Especialidade: Terapia Cognitivo-Comportamental</p>
            <p class="card-text">Email: Joaosilva@mentesa.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn1" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount1" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn1" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount1" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/mariasantos.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dra. Maria Santos</h3>
            <p class="card-text">Formação: Mestrado em Psicologia Clínica</p>
            <p class="card-text">Especialidade: Psicoterapia Psicodinâmica</p>
            <p class="card-text">Email: MariaSantos@mentesa.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn2" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount2" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn2" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount2" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/pedroalmeida.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dr. Pedro Almeida</h3>
            <p class="card-text">Formação: Graduação em Psicologia + Especialização em Psicologia Clínica Infantil.</p>
            <p class="card-text">Especialidade: Psicologia Clínica Infantil</p>
            <p class="card-text">Email: Pedroalmeida@example.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn3" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount3" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn3" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount3" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/anaoliveira.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dra. Ana Oliveira</h3>
            <p class="card-text">Formação: Graduação em Psicologia</p>
            <p class="card-text">Especialidade: Terapia Cognitivo-Comportamental</p>
            <p class="card-text">Email: Anaoliveira@mentesa.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn4" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount4" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn4" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount4" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>

        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/carlosouza.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dr. Carlos Souza</h3>
            <p class="card-text">Formação: Graduação em Psicologia + Especialização em Psicologia Clínica Familiar.</p>
            <p class="card-text">Especialidade: Clínica Familiar</p>
            <p class="card-text">Email: Carlossouza@mentesa.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn5" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount5" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn5" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount5" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/laurafereira.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dra. Laura Ferreira</h3>
            <p class="card-text">Formação: Graduação em Psicologia</p>
            <p class="card-text">Especialidade: Terapia Cognitivo-Comportamental</p>
            <p class="card-text">Email: Lauraferreira@mentesa.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn6" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount6" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn6" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount6" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/andreramos.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dr. André Ramos</h3>
            <p class="card-text">Formação: Graduação em Psicologia + Especialização em Dependência Química</p>
            <p class="card-text">Especialidade: Psicologia Clínica de Dependência Química</p>
            <p class="card-text">Email: Andreramos@mentesa.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn7" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount7" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn7" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount7" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/sofiapereira.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dra. Sofia Pereira</h3>
            <p class="card-text">Formação: Graduação em Psicologia + Especialização em Psicogerontologia</p>
            <p class="card-text">Especialidade: Terapia Cognitivo-Comportamental</p>
            <p class="card-text">Email: Sofiapereira@mentesa.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn8" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount8" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn8" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount8" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/miguelcosta.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dr. Miguel Costa</h3>
            <p class="card-text">Formação: Graduação em Psicologia</p>
            <p class="card-text">Especialidade: Clínica Geriátrica</p>
            <p class="card-text">Email: Miguelcosta@mentesa.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn9" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount9 class=" badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn9" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount9" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Imagens/carolinamendes.png" alt="Foto do Profissional">
          <div class="card-body">
            <h3 class="card-title">Dra. Carolina Mendes</h3>
            <p class="card-text">Formação: Graduação em Psicologia + Especialização em Trauma</p>
            <p class="card-text">Especialidade: Psicologia Clínica de Trauma</p>
            <p class="card-text">Email: profissional1@example.com</p>
            <div class="badge-container">
              <button type="button" id="recomendarBtn10" class="btn btn-primary btn-recomendar">
                Recomendo! <span id="recomendacoesCount10" class="badge badge-light">0</span> &#128077;
              </button>
              <button type="button" id="naoRecomendarBtn10" class="btn btn-danger btn-recomendar">
                Não Recomendo! <span id="naoRecomendacoesCount10" class="badge badge-light">0</span> &#128078;
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <?php include 'Footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#recomendarBtn1").click(function() {
        var count = parseInt($("#recomendacoesCount1").text());
        count++;
        $("#recomendacoesCount1").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn1").click(function() {
        var count = parseInt($("#naoRecomendacoesCount1").text());
        count++;
        $("#naoRecomendacoesCount1").text(count);
      });
    });

    $(document).ready(function() {
      $("#recomendarBtn2").click(function() {
        var count = parseInt($("#recomendacoesCount1").text());
        count++;
        $("#recomendacoesCount2").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn2").click(function() {
        var count = parseInt($("#naoRecomendacoesCount2").text());
        count++;
        $("#naoRecomendacoesCount2").text(count);
      });
    });

    $(document).ready(function() {
      $("#recomendarBtn3").click(function() {
        var count = parseInt($("#recomendacoesCount3").text());
        count++;
        $("#recomendacoesCount3").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn3").click(function() {
        var count = parseInt($("#naoRecomendacoesCount3").text());
        count++;
        $("#naoRecomendacoesCount3").text(count);
      });
    });

    $(document).ready(function() {
      $("#recomendarBtn4").click(function() {
        var count = parseInt($("#recomendacoesCount4").text());
        count++;
        $("#recomendacoesCount4").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn4").click(function() {
        var count = parseInt($("#naoRecomendacoesCount4").text());
        count++;
        $("#naoRecomendacoesCount4").text(count);
      });
    });
  
    $(document).ready(function() {
      $("#recomendarBtn5").click(function() {
        var count = parseInt($("#recomendacoesCount5").text());
        count++;
        $("#recomendacoesCount5").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn5").click(function() {
        var count = parseInt($("#naoRecomendacoesCount5").text());
        count++;
        $("#naoRecomendacoesCount5").text(count);
      });
    });

    $(document).ready(function() {
      $("#recomendarBtn6").click(function() {
        var count = parseInt($("#recomendacoesCount6").text());
        count++;
        $("#recomendacoesCount6").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn6").click(function() {
        var count = parseInt($("#naoRecomendacoesCount6").text());
        count++;
        $("#naoRecomendacoesCount6").text(count);
      });
    });

    $(document).ready(function() {
      $("#recomendarBtn7").click(function() {
        var count = parseInt($("#recomendacoesCount7").text());
        count++;
        $("#recomendacoesCount7").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn7").click(function() {
        var count = parseInt($("#naoRecomendacoesCount7").text());
        count++;
        $("#naoRecomendacoesCount7").text(count);
      });
    });

    $(document).ready(function() {
      $("#recomendarBtn8").click(function() {
        var count = parseInt($("#recomendacoesCount8").text());
        count++;
        $("#recomendacoesCount8").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn8").click(function() {
        var count = parseInt($("#naoRecomendacoesCount8").text());
        count++;
        $("#naoRecomendacoesCount8").text(count);
      });
    });

    $(document).ready(function() {
      $("#recomendarBtn9").click(function() {
        var count = parseInt($("#recomendacoesCount9").text());
        count++;
        $("#recomendacoesCount9").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn9").click(function() {
        var count = parseInt($("#naoRecomendacoesCount9").text());
        count++;
        $("#naoRecomendacoesCount9").text(count);
      });
    });

    $(document).ready(function() {
      $("#recomendarBtn10").click(function() {
        var count = parseInt($("#recomendacoesCount10").text());
        count++;
        $("#recomendacoesCount2").text(count);
      });
    });
    $(document).ready(function() {
      $("#naoRecomendarBtn10").click(function() {
        var count = parseInt($("#naoRecomendacoesCount10").text());
        count++;
        $("#naoRecomendacoesCount10").text(count);
      });
    });
  </script>
</body>

</html>