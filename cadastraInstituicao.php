<?php
	include ("conectaBanco.php");
	
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	
	$select = "select MAX(id_instituicao) from instituicao";
	$query = pg_query($dbcon, $select);
	$row = pg_fetch_row($query);
	$id = $row[0];
	if($id){
		$id = $id + 1;
		$sql = "insert into instituicao (id_instituicao, nome, descricao, rua, numero, complemento, bairro, email, website, id_cidade) values ('$id', '$nome', '$descricao', '$rua', '$numero', '$complemento', '$bairro', '$email', '$website', '$cidade')";
		$resp = pg_query($dbcon, $sql);
		if($resp){
			echo "Cadastro Efetuado com Sucesso";
		}
	}
?>