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

// Obtém os dados do formulário
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dob'];
$genero = $_POST['genero'];
$terapiasInteresse = $_POST['terapia'];
$interesse = $_POST['interest'];
$profissionalInteresse = $_POST['professionals'];

// Prepara a consulta SQL
$sql = "INSERT INTO contato (nome, email, telefone, cpf, data_nascimento, genero, terapias_interesse, interesse, profissional_interesse) 
        VALUES ('$nome', '$email', '$telefone', '$cpf', '$dataNascimento', '$genero', '$terapiasInteresse', '$interesse', '$profissionalInteresse')";

// Executa a consulta SQL
if ($conn->query($sql) === TRUE) {
    header('Location: confirma.php?id='.$conn->insert_id);
    exit;
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
