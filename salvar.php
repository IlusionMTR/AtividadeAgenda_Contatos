<?php
require "conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

if ($id == "") {
    // cadastro
    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
} else {
    // edição
    $sql = "UPDATE contatos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";
}

if ($conexao->query($sql)) {
    header("Location: index.php");
    exit;
} else {
    echo "Erro: " . $conexao->error;
}
?>
