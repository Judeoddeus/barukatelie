<?php
// session_start();
// if (!isset($_SESSION['usuario'])){
//     header('Location:../index.php?mensagem=login');
    
// }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Closet</title>
    <!-- Fontawesome -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <main class="container">
    <div id="header">
            <div class="row">
                <div class="col-md-2 faixa-lateral"></div>
                <div class="col-md10">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        
                        <div class="container-fluid">
                            
                            <a class="navbar-brand" href="#home"><img src="../images/logo.png" alt="logo Baruk"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                <a class="nav-link" href="../index.php">home</a>
                                <a class="nav-link" href="../orcamento.php">orçamento</a>
                                <a class="nav-link" href="../medidas.php">medidas</a>                                
                            </div>
                            </div>    
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>