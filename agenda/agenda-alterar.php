<?php
include "../conexao.php";

$id_agenda = $_POST['id_agenda'];

$data = $_POST['data'];
$hora = $_POST['hora'];
$cliente = $_POST['nome'];
$telefone = $_POST['telefone'];


$sqlAlterar = "UPDATE agenda SET 
                    data = '{$data}', 
                    hora = '{$hora}', 
                    nome = '{$cliente}', 
                    telefone = '{$telefone}'
                    ";
                    

$resultado = mysqli_query($conexao, $sqlAlterar);

if($resultado){
    echo "Alterado com sucesso <br>";
    echo "<a href='agenda-listar.php'>VOLTAR</a>";
}else{
    echo "Ocorreu algum erro.";
}
?>