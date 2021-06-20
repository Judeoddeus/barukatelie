<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


include "conexao.php";
$sqlInserir = "INSERT INTO cadastro(nome, senha, email
) 
VALUES(
    '{$nome}' ,
    '{$email}' ,
    '{$senha}'
    
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo"<script type = 'text/javascript'> alert('Cadastro realizado com sucesso') </script>";
    echo "<script type = 'text/javascript'>window.location.href = 'agenda/agenda-formulario-inserir.php'</script>";
}else{
    echo "Algum erro aconteceu.";
   
}
?>