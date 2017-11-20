<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$data = $_POST['data'];
	$senha = $_POST['senha'];

	require '../database/conexao.php';



	$sql = "INSERT INTO `usuario` (`cod_usuario`, `nome`, `data_nascimento`, `email`, `senha`) VALUES (NULL, '$nome', '$data', '$email', '$senha');"; 
	mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
	
	$url = 'info_usuario.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>