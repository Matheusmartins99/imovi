<?php

include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$imagem = $_POST['imagem'];

$atualizando_casas = "UPDATE imoveis_1 SET nome = '$nome', categoria = '$categoria', imagem = '$imagem' WHERE id = '$id' ";

$query_casas = mysqli_query($conection, $atualizando_casas);

header('location:imovi.php');


?>