<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>


<?php
	include ("conectaBanco.php");

session_start("teste");
 $login = $_SESSION['login'];
 	
 $cpfbanco = $_POST["cpf"];	
 $nomebanco = $_POST["nome_completo"];
 $nascimentobanco = $_POST["data_nascimento"];
 $emailbanco = $_POST["email"];
 $papelbanco = $_POST["papel"];
 $loginbanco = $_POST["nome_de_usuario"];
 $senhabanco = $_POST["senha"];
 $idcidadebanco = $_POST["id_cidade"];



 $modificar = "UPDATE pessoa SET cpf='$cpfbanco', nome_completo='$nomebanco', data_nascimento='$nascimentobanco', email='$emailbanco', papel='$papelbanco', nome_de_usuario='$loginbanco', senha='$senhabanco', id_cidade='$idcidadebanco' WHERE nome_de_usuario='$login'";
 $resp = pg_query($dbcon, $modificar);
		if($resp)
 print"
 <META HTTP-EQUIV=REFRESH CONTENT='0; URL=adm.php'>
 <script type=\"text/javascript\">
 alert(\"Atenção: Seus dados foram atualizados com sucesso. Aguarde enquanto você é redirecionado para sua área administrativa!\");
 </script>
 ";
 
?>


</head>

<body>
</body>
</html>