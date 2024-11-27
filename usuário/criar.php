<?php
require_once "../banco.php";

$criado = false;
$criar = $_SERVER['REQUEST_METHOD'] === "POST";

if ($criar) {
    if (
        isset($_POST["nome"]) && 
        isset($_POST["email"]) 
    ) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        query(inserir("usuario", ["nome", "email"], [$nome, $email]));
        $criado = true;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
</head>
<body>
    <a href="/Saep_dani/usuario">Voltar</a>

    <form method="POST">
    <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="CPF">CPF:</label>
        <input type="CPF" id="CPF" name="CPF" required>

        <label for="telefone">Telefone:</label>
        <input type="telefone" id="telefone" name="telefone" required>

        <button type="submit">Cadastrar</button>
    </form>

    <?php if ($criar && $criado): ?>
        <p>Usuário criado com sucesso</p>
    <?php elseif ($criar && !$criado): ?>
        <p>Erro ao criar usuário</p>
    <?php endif ?>
</body>
</html>