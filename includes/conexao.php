<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "baruk_atelie";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Falha na Conexão!". mysqli_connect_error());

?>