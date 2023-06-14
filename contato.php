<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">

  <script src="js.js"></script>
  <title>Document</title>
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <section id="profissionais">
      <h2>Para Contato:</h2>
      <form id="contact-form" action="enviarDados.php" method="post" onsubmit="return validateForm()">
        <div class="control">
          <label for="name"><b>Nome:</b></label>
          <input type="text" id="name" name="name" required>
          <div class="alert alert-danger error-message d-none" role="alert"></div>
        </div>

        <div class="control">
          <label for="email"><b>Email:</b></label>
          <input type="email" id="email" name="email" required>
          <div class="alert alert-danger error-message d-none" role="alert"></div>
        </div>

        <div class="control">
          <label for="phone"><b>Telefone:</b></label>
          <input type="tel" id="phone" name="phone" required>
          <div class="alert alert-danger error-message d-none" role="alert"></div>
        </div>

        <div class="control">
          <label for="cpf"><b>CPF:</b></label>
          <input type="text" id="cpf" name="cpf" required>
          <div class="alert alert-danger error-message d-none" role="alert"></div>
        </div>

        <div class="control">
          <label for="dob"><b>Data de Nascimento:</b></label>
          <input type="date" id="dob" name="dob" required>
          <div class="alert alert-danger error-message d-none" role="alert"></div>
        </div>

        <fieldset>
          <legend>Gênero:</legend>
          <div class="radio-group control radio-mobile">
            <label>
              <input type="radio" name="genero" value="masculino">
              Masculino
            </label>
            <label>
              <input type="radio" name="genero" value="feminino">
              Feminino
            </label>
            <label>
              <input type="radio" name="genero" value="nao-informar">
              Prefiro não informar
            </label>
            <label>
              <input type="radio" name="genero" value="outro">
              Outro
            </label>
            <div class="alert alert-danger error-message d-none" role="alert"></div>
          </div>
        </fieldset>

        <h2>Terapias de Interesse:</h2>
        <fieldset class="terapias">
          <div class="form-group control" id="terapiasInput">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="4" id="checkbox1">
              <label class="form-check-label" for="checkbox1">
                Terapia Familiar
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="5" id="checkbox2">
              <label class="form-check-label" for="checkbox2">
                Terapia de Casal
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="6" id="checkbox3">
              <label class="form-check-label" for="checkbox3">
                Terapia de Grupo
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="8" id="checkbox4">
              <label class="form-check-label" for="checkbox4">
                Terapia Breve
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="13" id="checkbox5">
              <label class="form-check-label" for="checkbox5">
                Terapia de Trauma
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="14" id="checkbox6">
              <label class="form-check-label" for="checkbox6">
                Terapia Infantil
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="1" id="checkbox7">
              <label class="form-check-label" for="checkbox7">
                Terapia Cognitivo-Comportamental (TCC)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="3" id="checkbox8">
              <label class="form-check-label" for="checkbox8">
                Terapia de Aceitação e Compromisso (ACT)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia" value="0" id="checkbox9">
              <label class="form-check-label" for="checkbox8">
                Outro
              </label>
              <div class="alert alert-danger error-message d-none" role="alert"></div>
            </div>
          </div>


        </fieldset>


        <div class="control">
          <label for="interest"><b>Descreva o interesse se necessario:</b></label>
          <textarea id="interest" name="interest"></textarea>
        </div>

        <div class="control">
          <label for="professionals"><b>Profissionais de Interesse:</b></label>
          <select id="professionals" name="professionals" required>
            <option value="x" disabled selected>Selecione uma opção...</option>
            <option value="joao">Dr. João Silva</option>
            <option value="maria">Dra. Maria Santos</option>
            <option value="pedro">Dr. Pedro Almeida</option>
            <option value="ana">Dra. Ana Oliveira</option>
            <option value="carlos">Dr. Carlos Souza</option>
            <option value="laura">Dra. Laura Ferreira</option>
            <option value="andre">Dr. André Ramos</option>
            <option value="sofia">Dra. Sofia Pereira</option>
            <option value="miguel">Dr. Miguel Costa</option>
            <option value="carolina">Dra. Carolina Mendes</option>
          </select>
          <div class="alert alert-danger error-message d-none" role="alert"></div>
        </div>

        <!-- Adicione as outras opções de profissionais aqui -->

        <div class="button-group">
          <button type="button" onclick="validateForm()">Verificar</button>

          <button type="button" class="btn btn-primary" onclick="displayFormValues()">
            Enviar
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deseja enviar suas informações?</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit">Enviar</button>
                </div>
              </div>
            </div>
          </div>

          <button type="reset">Limpar</button>
        </div>
      </form>
    </section>
  </main>

  <?php include 'footer.php'; ?>

</body>

</html>