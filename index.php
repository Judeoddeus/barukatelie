<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baruk Ateliê</title>

  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Link do Lightbox - faz a interação com a imagem -->
  <link href="css/lightbox.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div class="container area-usuario">
    <!-- ínicio do header -->
    <div id="header">
      <div class="row">
        <div class="col-md-2 faixa-lateral"></div>
        <div class="col-md10">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo Baruk"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#pravoce">pra você</a>
                  <a class="nav-link" href="#meucloset">meu closet</a>
                  <a class="nav-link" href="#location">localização</a>
                  <a class="nav-link" href="#sobre">sobre</a>
                  <a class="nav-link" href="#meucloset"><img src="" alt=""></a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- fim do Header -->

    <!-- início do home -->
    <div id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-2 faixa-lateral"></div>

          <div class="col-md-5 texto-destaque">
            <h1>Moda é o que você gosta. </h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi at quos sed ad blanditiis earum
              repudiandae, soluta sunt dolore, molestias ipsam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi at quos sed ad blanditiis earum
              repudiandae, soluta sunt dolore, molestias ipsam!</h4>
            <a href="#sobre" class="btn btn-outline-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">Saiba
              Mais</a>
            <a href="#meucloset" class="btn  btn-outline-primary button d-md-inline-block d-block mb-md-0 mb-2">Contato</a>
          </div>

          <div class="col-md-5">
            <img src="images/imagem-destaque.jpg" class="imagem-destaque " alt="">
            <div class="painel-icones">
              <div class="redes-sociais">
                <a href="https://www.instagram.com/"><img src="images/icones/instagram.png" alt="Instagram"></a>
                <a href="http://www.twitter.com"> <img src="images/icones/twitter.png" alt="twitter"></a>
                <a href="http://www.facebook.com"> <img src="images/icones/facebook.png" alt="facebook"></a>
                <a href="http://www.linkedin.com"> <img src="images/icones/linkedin.png" alt="linkedin"></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Fim do Home -->

    <!-- início Pra Você -->
    <div id="pravoce" class="container">
      <div class="row">
        <div class="col-md-2 faixa-lateral"></div>

        <div class="col-md-10">
          <div class="gallery-content">

            <div class="gallery-content__item">
              <div class="gallery-content__medium"><a href="images/galeria/foto004.jpg" rel="lightbox[modelos]" title="Vestido Sabrina">
                  <img src="images/galeria/foto4.jpg" alt="">
                </a>
              </div>
            </div>

            <div class="gallery-content__item pb-5">
              <div class="gallery-content__small"><a href="images/galeria/foto2.jpg" rel="lightbox[modelos]" title="Vestido Ina"><img src="images/galeria/foto002.jpg" alt=""></a>
              </div>

              <div class="gallery-content__small"> <a href="images/galeria/foto3.jpg" rel="lightbox[modelos]" title="Vestido Ciranda"><img src="images/galeria/foto003.jpg" alt=""></a>
              </div>

              <div class="gallery-content__small"><a href="images/galeria/foto5.jpg" rel="lightbox[modelos]" title="Blusa Freya"><img src="images/galeria/foto005.jpg" alt=""></a>
              </div>

              <div class="gallery-content__small"><a href="images/galeria/foto1.jpg" rel="lightbox[modelos]" title="Vestido Primavera"><img src="images/galeria/foto001.jpg" alt=""></a></div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Fim da galeria Pra você -->

    <!--início Meu Closet -->
    <?php include "includes/conexao.php" ?>
    <div id="meucloset" class="container">
      <div class="row">

        <div class="col-md-2 faixa-lateral"></div>

        <div class="col-md-10">

          <div class="container-dp pt-5">
            <div class="content-dp first-content">
              <div class="first-column">
                <h2 class="title title-primary">Não deixe de avaliar</h2>
                <p class="dp-modal">Ajude-nos a melhorar deixando aqui sua avaliação.</p>

                <!-- ínicio das avaliações -->
                <div class="estrelas-img">
                  <img src="images/stars.png" alt="estrelas de avaliação">
                </div>
                <button type="button" class="btn btn-dp" data-toggle="modal" data-target="#dpModal">Avaliar</button>
              </div>


              <!-- Início do Modal de comentários-->
              <div class="modal fade" id="dpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-title text-center">
                        <h4 class="title-second">Deixe seu Comentário</h4>
                      </div>
                      <div class="d-flex flex-column text-center estrelas-modal">
                        <?php
                        if (isset($_SESSION['msg'])) {
                          echo $_SESSION['msg'] . "<br><br>";
                          unset($_SESSION['msg']);
                        }
                        ?>
                        <form method="post" action="processa.php" enctype="multipart/form-data">
                          <div class="form-group">
                            <div class="estrelas">
                              <input type="radio" id="vazio" name="estrela" value="" checked>

                              <label for="estrela_um"><i class="fa"></i></label>
                              <input type="radio" id="estrela_um" name="estrela" value="1">

                              <label for="estrela_dois"><i class="fa"></i></label>
                              <input type="radio" id="estrela_dois" name="estrela" value="2">

                              <label for="estrela_tres"><i class="fa"></i></label>
                              <input type="radio" id="estrela_tres" name="estrela" value="3">

                              <label for="estrela_quatro"><i class="fa"></i></label>
                              <input type="radio" id="estrela_quatro" name="estrela" value="4">

                              <label for="estrela_cinco"><i class="fa"></i></label>
                              <input type="radio" id="estrela_cinco" name="estrela" value="5">

                              <input type="text" class="form-control" id="comentario" name="estrela" placeholder="Seu comentário..."><br>

                              <button type="submit" class="btn btn-second " data-toggle="modal">Cadastrar</button>
                            </div>

                          </div>

                        </form>
                      </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                    </div>
                  </div>
                </div>
                <!-- Fim do modal comentários-->
              </div>
              <!-- início do slide de comentários-->
              <div class="second-column">
                <h2 class="title title-second">Comentários</h2>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <h5>Mussum Ipsum, cacilds vidis litro abertis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.</h5>
                      <p>Marcia Caetano</p>
                    </div>
                    <div class="carousel-item">
                      <h5>Cachacis que pode alegrar sua vidis. Mussum Ipsum, cacilds vidis litro abertis.</h5>
                      <p>Ana Ribeiro</p>
                    </div>
                    <div class="carousel-item">
                      <h5>Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.</h5>
                      <p>Vera Sato</p>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              <!-- fim dos slides de comentários-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim do MeuCloset-->
    <!-- início da localização -->
    <div id="location" class="container">
      <div class="row">
        <div class="col-md-2 faixa-lateral"></div>
        <div class="col-md-10 pb-5">
          <h4>Encontre-nos</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58857.072698475255!2d-47.31947711893437!3d-22.781443442981498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89785075af1b9%3A0xa507c7c43ea60f2b!2sNova%20Odessa%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1622925361549!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
      </div>
    </div>
    <!-- Fim da Localização -->
    <!-- início do sobre -->
    <div id="sobre" class="container ">
      <div class="row ">
        <div class="col-md-2 faixa-lateral "></div>
        <div class="col-md-5">
          <div class="card pt-5">
            <img src="images/slider/foto1.jpg" class="banner-rotativo" alt="Modelo">

            <div class="card-body">
              <h5 class="card-title">Por que escolher</h5>
              <p class="card-text">Prestamos serviços desde 2018, com atendimento personalizado
                e de alta qualidade.
                O Ateliê Baruk é o lugar de trabalho de pessoas com vontade de criar e onde pode-se experimentar e
                produzir seu estilo de roupas.</p>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card pt-5">
            <img src="images/galeria/imagem-sobre.jpg" alt="Modelo">
            <div class="card-body">
              <h5 class="card-title">O que fazemos</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae eius voluptatibus dipisicin perspiciatis laudantium ipsam maiores nemo facilis quisquam?
                Lorem, sit a coma adipisicing elit. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim Sobre -->
    <!-- início do footer -->
    <div class="container  justify-content-center text-light ">
      <footer>
        <div class="row  justify-content-center py-5">
          <div class="col-11">
            <div class="row ">
              <div class="col-md-4 col-sm-4 col-12 ">
                <h3 class="text-muted mb-md-0 mb-5 bold-text"><a href="#header"><img src="images/logo2.png" alt=""></a>
                </h3>
              </div>
              <div class="col-md-4 col-sm-4 col-12">
                <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                <ul class="list-unstyled">
                  <li>Home</li>
                  <li>Pra você</li>
                  <li>Meu Closet</li>
                  <li>Contact</li>
                  <li>About</li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-4 col-12">
                <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>Endereço</b></h6>
                <p class="mb-1">Rua das Flores, 598</p>
                <p>São Manoel - Nova Odessa / SP</p>
                <p>Aberto das 8:00 às 17:30 de Segunda a Sexta.</p>

              </div>
            </div>
            <div class="row ">
              <div class="col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                <p class="social text-muted mb-0 pb-0 bold-text">
                  <span class="mx-2"><i class="fab fa-facebook-square"></i>
                    <span class="mx-2"><i class="fab fa-instagram-square"></i>
                </p><small class="rights"><span>&#174;</span> Baruk Ateliê todos os
                  Direitos Reservados.</small>
              </div>
              <div class="col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                <h6 class="mt-55 mt-2 text-muted bold-text"><b>ELIZABETE RIBEIRO</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> barukatelie@gmail.com</small>
              </div>
              <div class="col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                <h6 class="text-muted bold-text"><b>JULIANA OLIVEIRA</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> contato@gmail.com</small>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- fim do footer -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/funcoes.js"></script>
</body>

</html>