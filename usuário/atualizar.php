<?php
require_once "../banco.php";

$atualizado = false;
$atualizar = $_SERVER['REQUEST_METHOD'] === "POST";

$id = $_GET["id"];

if ($atualizar) {
    if (
        isset($_POST["nome"]) && 
        isset($_POST["email"])

    ) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        query(atualizar("usuario", ["nome" => $nome, "email" => $email], ["id_usuario", $id]));
        $atualizado = true;
    }
}

$cliente = query(listar('usuario', ["id_usuario", $id]));
$cliente = $cliente[0];
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
        <input type="text" id="nome" name="nome" value="<?= $usuario["nome"] ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $usuario["email"] ?>" required>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>