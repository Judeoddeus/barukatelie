<?php
session_start();
$usuarioSistema = $_POST['email'];
$senhaSistema= $_POST['senha'];


echo "{$usuarioSistema} - {$senhaSistema}";

include "includes/conexao.php";

$sqlBusca = "SELECT email, senha FROM cadastro_cliente WHERE email = '{$usuarioSistema}' and senha = '{$senhaSistema}'";
$resultado = mysqli_query($conexao, $sqlBusca);

if(mysqli_num_rows($resultado) > 0){
    $_SESSION['email'] = "sim";
    header('Location:clientes/area-usuario.php');
}else{
    header('Location: index.php?mensagem=errado');
}

?>