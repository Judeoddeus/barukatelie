<?php

$data = $_POST['data'];
$hora = $_POST['hora'];
$cliente = $_POST['nome'];
$telefone = $_POST['telefone'];



include "../conexao.php";
$sqlInserir = "INSERT INTO agenda(data, hora, nome, telefone
) 
VALUES(
    '{$data}' ,
    '{$hora}' ,
    '{$cliente}' , 
    '{$telefone}'
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Agendamento realizado com sucesso!<br>";
    echo "<script type = 'text/javascript'>window.location.href = 'agenda-listar.php'</script>";
   
}else{
    echo "Algum erro aconteceu";
}

?> 