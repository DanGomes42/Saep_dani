<?php
require_once "../banco.php";
$clientes = query(listar('usuario'));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Usuários</h1>
    <a href="criar.php">Adicionar Usuário</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario["id_usuario"] ?></td>
            <td><?= $usuario["nome"] ?></td>
            <td><?= $usuario["email"] ?></td>
            <td>
                <a href="deletar.php?id=<?= $usuario["id_usuario"] ?>">Deletar</a>
                <a href="atualizar.php?id=<?= $usuario["id_usuario"] ?>">Atualizar</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>