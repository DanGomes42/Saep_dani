<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SAEP_DB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuario (nome, email) VALUES ('$nome', '$email')";


if ($conn->query($sql) === TRUE) {
    $cliente_id = $conn->insert_id;
    $response = ['mensagem' => 'Usuário cadastrado com sucesso' => true, 'usuario_id' => $usuario_id];
} else {
    $response = ['mensagem' => 'Erro ao cadastrar usuário: ' . $conn->error];
}

echo json_encode($response);

$conn->close();
?>