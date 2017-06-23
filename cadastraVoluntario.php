<?php
	include ("conectaBanco.php");
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$data_nascimento = $_POST['data_nascimento'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	
	$sql = "insert into pessoa (cpf, nome_completo, data_nascimento, email, papel, nome_de_usuario, senha, id_cidade) values ('$cpf', '$nome', '$data_nascimento', '$email', 2, '$login', '$senha', '$cidade')";
	$resp = pg_query($dbcon, $sql);
	if($resp){
		echo "Cadastro Efetuado com Sucesso";
	}
?>