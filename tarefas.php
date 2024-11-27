<?php
$servername = "Localhost";
$username = "root";
$password = "root";
$dbname = "SAEP_DB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
$usuario_id = $_GET['usuario_id'];

$descricao = $_POST['descricao'];
$prioridade = $_POST['prioridade'];
$status = $_POST['status'];
$data_cadastro = $_POST['data_cadastro'];
$nome_setor = $_POST['nome_setor'];

$sql = "INSERT INTO chamado (usuario_id, descricao, prioridade, status, data_cadastro, nome_setor) 
        VALUES ('$usuario_id', '$descricao', '$prioridade', 'a fazer', '$data_cadastro', '$nome_setor')";

if ($conn->query($sql) === TRUE) {
    $response = ['mensagem' => 'Tarefa cadastrada com sucesso'];
} else {
    $response = ['mensagem' => 'Erro ao cadastrar Tarefa: ' . $conn->error];
}

echo json_encode($response);

$conn->close();
?>