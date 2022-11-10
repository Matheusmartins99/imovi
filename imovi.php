<?php
    
include "conexao.php";

$buscar_casas = "SELECT * FROM imoveis_1";
$query_casas = mysqli_query($conection, $buscar_casas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iMovi</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS do projeto -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style type="text/css">

    #container{
    margin-top: 25px;
    }

    tr{
    text-align: center;
    
    }

    .crud{
    display: flex;
    justify-content: center;
    gap: 10px;
    }

    #btn{
        border-radius: 7px;
        font-size: 18px;
    }

    #imagem{
        object-fit: cover;
        width: 100%;
    }

    #espaço{
        margin-top: 30px;
    }

    #featured-images .col-md-4{
    position: relative;
    cursor: pointer;
}


    
    </style>
</head>
<body>
    <!--NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
      <div class="container py-3">
        <a href="#" class="navbar-brand primary-color">
            <img src="imagem/imovi-icon.png" alt="iMovi">
            <span>iMovi</span>
        </a>
        <button
         class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="nav-bar-items" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar-items">
            <ul class="navbar-nav me-auto mb-2 lg-0">
                <li class="nav-item">
                    <a href="#" class="nav-link active primary-color" aria-current="page">Home</a>
                </li>
            </ul>
            <div>
                <a href="login.html"><button class="links">Login</button></a>
            </div>
        </div>
      </div>
    </nav>
    <!-- SLIDER -->
    <div class="container" id="slider-container">
        <div class="carousel slide" id="slider" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" class="active" data-bs-target="#slider" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>

                <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>

                <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagem/banner-1.jpg" alt="Casa 1" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Casas planejadas</h5>
                        <a href="#" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagem/banner-2.jpg" alt="Casa 2" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Projetos Complexos</h5>
                        <a href="#" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagem/banner-3.jpg" alt="Casa 3" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Projetos Inovadores</h5>
                        <a href="#" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide-to="prev">
                <i class="bi bi-chevron-compact-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide-to="next">
                <i class="bi bi-chevron-compact-right"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- MINI BANNERS -->
        <div class="col-12 col-md-10 offset-md-1" id="mini-banners">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-box primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Projetos completos</h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-layers primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Você participa também</h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-lightning-charge primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Adiantamento de entregas</h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DESTAQUES -->
    <div class="container" id="featured-container">
        <div class="col-12">
            <h2 class="title primary-color">Projetos inseridos por clientes</h2>
            <p class="subtitle secondary-color">
                Cadastre um abaixo para apresentar aqui!
            </p>
        </div>
        <div class="col-12" id="featured-images">
            <div class="row g-4">
                <!-- Onde VAI RECEBER WHILE -->
                <?php
                  while($receber_casas = mysqli_fetch_array($query_casas)){

                  $id = $receber_casas['id'];
                  $nome = $receber_casas['nome'];
                  $categoria = $receber_casas['categoria'];
                  $imagem = $receber_casas['imagem']; 

                  ?>
                <div class="col-12 col-md-4">
                    <img src="<?php echo $imagem; ?>" alt="Projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secoondary-color"><?php echo $categoria; ?></p>
                        <h3><?php echo $nome; ?></h3>
                    </div>
                </div>
                <!-- ONDE VAI FECHAR A REPETIÇAO -->
                <?php

                };

                ?>
            </div>
        </div>
        
        <div id="espaço" class="col-12">
                <h2 class="title primary-color">Cadastre os Imóveis do seu gosto!</h2>
                <p class="subtitle secondary-color">
                Nos campos abaixo coloque o seu nome, categotia (exemplo: apartamento) e uma URL da imagem que deseja inseir! 
            </p>

            <div class="container" id="container">
            <?php
    
             include "conexao.php";
    
                $buscar_casas = "SELECT * FROM imoveis_1";
                $query_casas = mysqli_query($conection, $buscar_casas);
                
            ?>
        <table class="table" >
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">IMAGEM</th>
            <th scope="col">AÇÕES</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
                while($receber_casas = mysqli_fetch_array($query_casas)){

                  $id = $receber_casas['id'];
                  $nome = $receber_casas['nome'];
                  $categoria = $receber_casas['categoria'];
                  $imagem = $receber_casas['imagem'];
            ?>

            <tr>
            <form action="editar_casa.php" method="post">
            <th scope="row"><?php echo $id; ?></th>
            <td><input type="text" name="nome" value="<?php echo $nome; ?>"></td>
            <td><input type="text" name="categoria" value="<?php echo $categoria; ?>"></td>
            <td><input type="text" name="imagem" value="<?php echo $imagem; ?>"></td>
            <td class="crud">
              <input type="submit" id="btn" class="btn btn-primary" value= "Editar">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            </form>
            <form action="excluir_casa.php" method="post">
            <input type="submit" id="btn" class="btn btn-danger" value="Excluir">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                </form>
            </td>
              </tr>
              <?php

                };

              ?>
              <tr>
              <form >
             <td></td>
             <td><input id="nome" type="text" placeholder="Nome" /> </td>
             <td><input id="categoria" type="text" placeholder="Categoria" /></td>
             <td><input id="imagem" type="text" placeholder="Imagem" /></td>
             <td><button id="btn" class="btn btn-success" onclick="cadastro()">Cadastrar</button></td>
          </form>
              </tr>
        </tbody>
      </table>
    </div>
    <!-- INFO -->
    <div class="container" id="info-container">
        <div class="col-12">
            <h2 class="title primary-color">Detalhes Importantes</h2>
            <p class="subtitle secondary-color">
               Saiba mais sobre a experiência da nossa incível equipe
            </p>
        </div>  
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-5" id="info-banner">
                    <img src="imagem/infobanner.jpg" alt="Informações da Empresa" class="img-fluid">
                </div>
                <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title primary-color">Estes dados fazem a diferença</h2>
                            <p class="subtitle secondary-color">
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. At, in, ipsa enim fuga ad vel quae nam ipsam a asperiores cum fugiat sint repellat libero provident cumque mollitia maiores aspernatur?
                            </p>
                        </div> 
                        <div class="col-12" id="info-numbers">
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="primaru-color">18</h3>
                                    <p class="secondary-color">Anos na construção civil</p>
                                </div>
                                <div class="col-4">
                                    <h3 class="primaru-color">95</h3>
                                    <p class="secondary-color">Projetos executados</p>
                                </div>
                                <div class="col-4">
                                    <h3 class="primaru-color">639</h3>
                                    <p class="secondary-color">Clientes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!-- FOOTER -->
    <footer class="container-fluid bg-dark-color" id="footer">
        <div class="container">
            <div class="row">
                <!-- FOOTER TOP -->
                <div class="col-12" id="footer-top">
                    <div class="row justify-content-between">
                        <div class="col-4"><h2>iMovi</h2></div>
                        <div class="col-4" id="social-icons">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <!-- FOOTER DETAILS -->
                <div class="col-12" id="footer-details">
                    <div class="row">
                        <div class="col-12 col-md-4" id="news-container">
                            <h4>Fique por dentro das novidades</h4>
                            <p class="secondary-color">Inscreva-se para saber em primeira mão</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Digite o seu e-mail">
                                </div>
                                <button class="btn btn-dark" type="submit">Inscrever</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-4" id="contact-container">
                            <h4>Formas de contato</h4>
                            <p class="secondary-color">(48)9999-9999</p>
                            <p class="secondary-color">contato@imovi.com</p>
                        </div>
                        <div class="col-12 col-md-4" id="links-container">
                            <div class="row">
                                <h4>Você pode estar procurando por:</h4>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="secondary-color">Projetos</a></li>
                                        <li><a href="#" class="secondary-color">Imóveis</a></li>
                                        <li><a href="#" class="secondary-color">Vendas</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="secondary-color">Contratar</a></li>
                                        <li><a href="#" class="secondary-color">Trabalhe Conosco</a></li>
                                        <li><a href="#" class="secondary-color">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER BOOTTOM -->
                <div class="col-12" id="footer-bottom">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">iMovi &copy; 2022</p>
                        </div>
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">
                             Realizamos o seu projeto 
                             <i class="bi bi-heart"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="cadastrar_casa.js"></script>
</body>
</html>