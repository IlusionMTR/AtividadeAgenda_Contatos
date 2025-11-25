<?php require "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Agenda de Contatos</h1>

<h2>Cadastrar Novo Contato</h2>
<form action="salvar.php" method="post">
    <input type="hidden" name="id" value="">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>E-mail:</label>
    <input type="email" name="email" required>

    <label>Telefone:</label>
    <input type="text" name="telefone" required>

    <button type="submit">Cadastrar</button>
</form>

<hr>

<h2>Lista de Contatos</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>

<?php
$resultado = $conexao->query("SELECT * FROM contatos");

while($linha = $resultado->fetch_assoc()):
?>
    <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['nome'] ?></td>
        <td><?= $linha['email'] ?></td>
        <td><?= $linha['telefone'] ?></td>
        <td>
            <a href="editar.php?id=<?= $linha['id'] ?>">Editar</a> |
            <a href="excluir.php?id=<?= $linha['id'] ?>" onclick="return confirm('Excluir contato?')">Excluir</a>
        </td>
    </tr>
<?php endwhile; ?>

</table>

</body>
</html>
