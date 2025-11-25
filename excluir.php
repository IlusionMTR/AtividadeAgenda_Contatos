<?php
require "conexao.php";

$id = $_GET['id'];
$conexao->query("DELETE FROM contatos WHERE id = $id");

header("Location: index.php");
exit;
?>
