<html>
<head>
<title>Documento sem t&iacute;tulo</title>
</head>

<body>

<div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
<?php

include ("conectaBanco.php");

$errors1="";
$errors2="";
$nome= $_POST['nome_projeto'];
$descricao= $_POST['descricao'];
$cpf = $_POST['cpf'];
$id_instituicao = $_POST['id_instituicao'];

	
	$select = "select MAX(id_projeto) from projeto";
	$query = pg_query($dbcon, $select);
	$row = pg_fetch_row($query);
	$id = $row[0];
	if($id){
		$id = $id + 1;
			
  $sql = "insert into projeto (id_projeto, nome, descricao, cpf, id_instituicao) VALUES  ('$id','$nome','$descricao','$cpf','$id_instituicao')";
   $resul = pg_query($dbcon, $sql);
    if($resul){
      echo "<font size=1 face=Verdana, Arial, Helvetica, sans-serif><br><br>Projeto cadastrado</font></div>";
		}
	}

 
?>

 
</font></div>
</body>
</html>

