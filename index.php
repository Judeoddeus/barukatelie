<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baruk Ateliê</title>
    <!-- Fontawesome -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Link do Lightbox - faz a interação com a imagem -->
    <link href="css/lightbox.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div id="header">
            <div class="row">
                <div class="col-md-2 faixa-lateral"></div>
                <div class="col-md10">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        
                        <div class="container-fluid">
                            
                            <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo Baruk"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#pravoce">pra você</a>
                                <a class="nav-link" href="#meucloset">meu closet</a>
                                <a class="nav-link" href="#location">localização</a>
                                <a class="nav-link" href="#sobre">sobre</a>
                                <a class="nav-link" href="#meucloset"><img src="images/icones/user.png" alt="Login"></a>
                                </div>
                            </div>    
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- fim do Header -->

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
                    <a href="#contatos" class="btn  btn-outline-primary button d-md-inline-block d-block mb-md-0 mb-2">Contato</a>
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
                      <div class="linha-imagem-destacada"><span></span></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Fim do Home -->
    <div id="pravoce" class="container">
        <div class="row">
            <div class="col-md-2 faixa-lateral"></div>
            <div class="col-md-10">

                <div class="gallery-content">
                
                    <div class="gallery-content__item">
                        <div class="gallery-content__medium"><a href="images/galeria/foto004.jpg" rel="lightbox[modelos]"
                            title="Vestido Sabrina">
                            <img src="images/galeria/foto4.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="gallery-content__item pb-5">
                        <div class="gallery-content__small"><a href="images/galeria/foto2.jpg" rel="lightbox[modelos]"
                            title="Vestido Ina"><img src="images/galeria/foto002.jpg" alt=""></a>
                        </div>
                        <div class="gallery-content__small"> <a href="images/galeria/foto3.jpg" rel="lightbox[modelos]"
                            title="Vestido Ciranda"><img src="images/galeria/foto003.jpg" alt=""></a>
                        </div>
                        <div class="gallery-content__small"><a href="images/galeria/foto5.jpg" rel="lightbox[modelos]"
                            title="Blusa Freya"><img src="images/galeria/foto005.jpg" alt=""></a></div>
                        <div class="gallery-content__small"><a href="images/galeria/foto1.jpg" rel="lightbox[modelos]"
                            title="Vestido Primavera"><img src="images/galeria/foto001.jpg" alt=""></a></div>
                    </div>

                </div>  
            
            </div>
        </div>
    </div>
    <!-- Fim da galeria Pra você -->
  <?php  include "conexao.php"?>
    <div id="meucloset" class="container">

        <div class="row">
            <div class="col-md-2 faixa-lateral"></div>
            <div class="col-md-10" class="login">
                <div class="container-login pt-5">
                    <div class="content-login first-content">
                        <div class="first-column">
                            <h2 class="title title-primary">Bem vindo!</h2>
                            <p class="description description-primary"><input type="checkbox" checked> Lembre-se de mim</p>
                            <p class="description description-primary">entre com suas informações de cadastro</p>
                            <button id="signin" class="btn btn-primary " onclick="LoginOn();">Sing in</button>
                        </div>
                        <div class="second-column">
                            <h2 class="title title-second">Crie uma Conta</h2>
                            <!-- social media -->
                            <div class="social-media">
                              <ul class="list-social-media">
                                <a href="#" class="link-social-media">
                                  <li class="item-social-media">
                                    <i class="fab fa-facebook-f"></i>
                                  </li>
                                </a>
                                <a href="#" class="link-social-media">
                                  <li class="item-social-media">
                                    <i class="fab fa-google-plus-g"></i>
                                  </li>
                                </a>
                                <a href="#" class="link-social-media">
                                  <li class="item-social-media">
                                    <i class="fab fa-linkedin-in"></i>
                                  </li>
                                </a>
                              </ul>
                            </div>
              
                            <p class="description description-second"> ou use seu e-mail de resgistro</p>
                            <form class="form" name="cadastro" method="post" action="cadastro-inserir.php">
                              <label class="label-input">
                                <i class="far fa-user icone"></i>
                                <input type="text" name="nome" placeholder="Nome*" required>
                              </label>
                              <label class="label-input">
                                <i class="far fa-envelope icone"></i>
                                <input type="email" name="email" placeholder="Email*" required>
                              </label>
                              <label class="label-input">
                                <i class="fas fa-lock icone"></i>
                                <input type="password" name="senha" placeholder="Password*" maxlength="8" required>
                              </label>
              
                              <button class="btn btn-second">Sign up</button>
                            </form>
                          </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Fim do cadastro MeuCloset-->
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
                  <h6 class="mt-55 mt-2 text-muted bold-text"><b>ELIZABETE RIBEIRO</b></h6><small> <span><i
                        class="fa fa-envelope" aria-hidden="true"></i></span> barukatelie@gmail.com</small>
                </div>
                <div class="col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                  <h6 class="text-muted bold-text"><b>JULIANA OLIVEIRA</b></h6><small><span><i class="fa fa-envelope"
                        aria-hidden="true"></i></span> contato@gmail.com</small>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/lightbox.js"></script>
        <script src="js/funcoes.js"></script>
    </body>
</html>
