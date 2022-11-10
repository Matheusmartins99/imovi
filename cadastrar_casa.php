<?php

include "conexao.php";

$data = json_decode(file_get_contents('php://input'), true);

$nome = $data['nome'];
$categoria = $data['categoria'];
$imagem = $data['imagem'];

$recebendo_casas = "INSERT INTO  imoveis_1 VALUES (NULL, '$nome', '$categoria', '$imagem')";

$query_casas = mysqli_query($conection, $recebendo_casas);

header('location:imovi.php');
