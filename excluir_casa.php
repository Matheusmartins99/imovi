<?php

include "conexao.php";

$id = $_POST['id'];

$deletar_casas = "DELETE FROM imoveis_1 WHERE id = '$id'";

$query_delete_casas = mysqli_query($conection, $deletar_casas);

header('location:imovi.php');


?>