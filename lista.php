<?php
    
include "conexao.php";

$buscar_pessoas = "SELECT * FROM clientes";
$query_pessoas = mysqli_query($conection, $buscar_pessoas);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/lista.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Lista de Usuários</title>
</head>
<body>
    <!-- As a link -->
<nav class="navbar navbar-dark  bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cadastro de Pessoas</a>
    </div>
  </nav>
  <div class="container" id="container">
    <table class="table" >
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">SENHA</th>
            <th scope="col">AÇÕES</th>
          </tr>
        </thead>
        <tbody>
        <?php
                while($receber_pessoas = mysqli_fetch_array($query_pessoas)){

                  $id = $receber_pessoas['id'];
                  $nome = $receber_pessoas['nome'];
                  $email = $receber_pessoas['email'];
                  $telefone = $receber_pessoas['telefone'];
                  $senha = $receber_pessoas['senha'];  
            ?>

            <tr>
            <form action="editar.php" method="post">
            <th scope="row"><?php echo $id; ?></th>
            <td><input type="text" name="nome" value="<?php echo $nome; ?>"></td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            <td><input type="text" name="telefone" value="<?php echo $telefone; ?>"></td>
            <td><input type="text" name="senha" value="<?php echo $senha; ?>"></td>
            <td class="crud">
              <input type="submit" class="btn btn-primary" value= "Editar">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            </form>
            <form action="excluir.php" method="post">
            <input type="submit" class="btn btn-danger" value="Excluir">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                </form>
            </td>
              </tr>
              <?php

                };

              ?>
        </tbody>
      </table>

  </div>
  






    








    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>