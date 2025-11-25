<?php require "conexao.php";

$id = $_GET['id'];
$sql = $conexao->query("SELECT * FROM contatos WHERE id = $id");
$contato = $sql->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Editar Contato</h1>

<form action="salvar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?= $contato['nome'] ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?= $contato['email'] ?>" required>

    <label>Telefone:</label>
    <input type="text" name="telefone" value="<?= $contato['telefone'] ?>" required>

    <button type="submit">Salvar Alterações</button>
</form>

</body>
</html>
