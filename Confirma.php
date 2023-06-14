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
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <div class="container">
      <h1>Agradecemos o contato!</h1>
      <p>Obrigado por entrar em contato! Recebemos sua mensagem e responderemos em breve.</p>
      <p>Um email de confirmação será enviado para o endereço fornecido.</p>
      <p>Fique atento à sua caixa de entrada e verifique a pasta de spam caso não receba nossa resposta em alguns dias.</p>
      <p>Agradecemos seu interesse e aguardamos ansiosamente para ajudá-lo(a).</p>
    </div>

    <?php

    // Informações de conexão com o banco de dados
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'mentesa';

    // Conexão com o banco de dados
    $conn = new mysqli($host, $usuario, $senha, $banco);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
      die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
    }

    $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parts = parse_url($url);
    parse_str($parts['query'], $query);

    // Consulta SQL para selecionar os dados da tabela
    $sql = "SELECT * FROM contato where id = ". $query['id'];

    // Executa a consulta SQL
    $result = $conn->query($sql);

    // Verifica se há registros retornados
    if ($result->num_rows > 0) {
      // Exibe os dados em uma tabela
      echo '<div class="container mt-5">';
      echo '<h2>Seus Dados</h2>';
      echo '<table class="table">';
      echo '<thead><tr><th>Nome</th><th>Email</th><th>Telefone</th><th>CPF</th><th>Data de Nascimento</th><th>Gênero</th><th>Terapias de Interesse</th><th>Interesse</th><th>Profissional de Interesse</th></tr></thead>';
      echo '<tbody>';

      // Percorre os registros retornados
      while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['nome'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['telefone'] . '</td>';
        echo '<td>' . $row['cpf'] . '</td>';
        echo '<td>' . $row['data_nascimento'] . '</td>';
        echo '<td>' . $row['genero'] . '</td>';
        echo '<td>' . $row['terapias_interesse'] . '</td>';
        echo '<td>' . $row['interesse'] . '</td>';
        echo '<td>' . $row['profissional_interesse'] . '</td>';
        echo '</tr>';
      }

      echo '</tbody>';
      echo '</table>';
      echo '</div>';
    } else {
      echo 'Nenhum dado encontrado.';
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>

  </main>

  <?php include 'footer.php'; ?>
</body>

</html>