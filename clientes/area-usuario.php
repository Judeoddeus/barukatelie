<<<<<<< HEAD
<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php"
?>

<?php
$sqlBusca = "SELECT * FROM cadastro_medidas_cliente ";
$area_usuario = mysqli_query($conexao, $sqlBusca);
?>

<!-- informação do usuário -->
<?php

// $id_usuario = $_GET["id"];

$sqlBusca = "SELECT * FROM cadastro_cliente WHERE id = " . 65;
$listaDeUsuarios = mysqli_query($conexao, $sqlBusca);

$nome = $telefone = $email = "";

while ($usuario = mysqli_fetch_assoc($listaDeUsuarios)) {
    $nome = $usuario['nome'];
    $telefone = $usuario['telefone'];
    $email = $usuario['email'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <form name="formulario-usuario" method="POST" action="area-usuario.php">
                <div class="form-row d-flex pb-3 ">
                    <div class="form-group col-md-3 p-2">
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>"><br>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>"><br>
                        <input type="text" class="form-control" id="telefone" name="email" value="<?php echo $email; ?>"><br>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-md-4">
            <img src="" alt="">
        </div>
    </div>
</div>


=======
<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php"
?>

<?php
$sqlBusca = "SELECT * FROM cadastro_medidas_cliente ";
$area_usuario = mysqli_query($conexao, $sqlBusca);
?>

<!-- informação do usuário -->
<?php

// $id_usuario = $_GET["id"];

$sqlBusca = "SELECT * FROM cadastro_cliente WHERE id = " . 65;
$listaDeUsuarios = mysqli_query($conexao, $sqlBusca);

$nome = $telefone = $email = "";

while ($usuario = mysqli_fetch_assoc($listaDeUsuarios)) {
    $nome = $usuario['nome'];
    $telefone = $usuario['telefone'];
    $email = $usuario['email'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <form name="formulario-usuario" method="POST" action="area-usuario.php">
                <div class="form-row d-flex pb-3 ">
                    <div class="form-group col-md-3 p-2">
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>"><br>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>"><br>
                        <input type="text" class="form-control" id="telefone" name="email" value="<?php echo $email; ?>"><br>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-md-4">
            <img src="" alt="">
        </div>
    </div>
</div>


>>>>>>> 39274060ee3b9d9dd681d65e8e024d599159da03
<?php include "../includes/rodape.php"; ?>