<?php
session_start();
include "includes/conexao.php";

$estrela = $_POST['estrela'];

if(!empty($_POST['estrela'])){
	$estrela = $_POST['estrela'];
	
	//Salvar no banco de dados
	$result = "INSERT INTO avaliacao (qtd_estrela, comentario, criado) VALUES ('$estrela'";
	$resultado_avaliacao = mysqli_query($conexao, $result_avaliacao);
	
	if(mysqli_insert_id($conexao)){
		$_SESSION['msg'] = "Avaliação cadastrada com sucesso";
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar a avaliação";
		header("Location: index.php");
	}
	
}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
	header("Location: index.php");
}

?>