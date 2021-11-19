<<<<<<< HEAD
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

include "../includes/conexao.php";

$sqlInserir = "INSERT INTO cadastro_cliente(nome, email, senha, telefone) 
VALUES(
    '{$nome}' ,
    '{$email}' ,
    '{$senha}',
    '{$telefone}'
    
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo"<script type = 'text/javascript'> alert('Cadastro realizado com sucesso') </script>";
    echo "<script type = 'text/javascript'>window.location.href = area-usuario.php'</script>";
}else{
    echo "Algum erro aconteceu.";
   
}
=======
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

include "../includes/conexao.php";

$sqlInserir = "INSERT INTO cadastro_cliente(nome, email, senha, telefone) 
VALUES(
    '{$nome}' ,
    '{$email}' ,
    '{$senha}',
    '{$telefone}'
    
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo"<script type = 'text/javascript'> alert('Cadastro realizado com sucesso') </script>";
    echo "<script type = 'text/javascript'>window.location.href = area-usuario.php'</script>";
}else{
    echo "Algum erro aconteceu.";
   
}
>>>>>>> 39274060ee3b9d9dd681d65e8e024d599159da03
?>