<html>
<head>
<title>Documento sem t&iacute;tulo</title>
</head>

<body>

<div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
<?php

include ("conectaBanco.php");

$nome= $_POST['nome_vaga'];
$id_projeto = $_POST['id_projeto'];
$descricao= $_POST['descricao'];
$pre_requisitos = $_POST['pre_requisitos'];
$quantidade = $_POST['quantidade'];
$distancia = $_POST['a_distancia'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$pontual = $_POST['eh_pontual'];
$id_cidade = $_POST['id_cidade'];

	
	$select = "select MAX(id_vaga) from vaga";
	$id = pg_query($dbcon, $select);
	echo $id;
	if($id){
		$id = $id + 1;
		echo $id;
	

  $cadastrar = "INSERT INTO vaga (id_projeto, id_vaga, nome, descricao, pre_requisitos, quantidade, a_distancia, rua, numero, complemento, bairro, eh_pontual, id_cidade) VALUES ('$id_projeto', '$id','$nome','$descricao','$pre_requisitos','$quantidade', '$distancia', '$rua', '$numero', '$complemento', '$bairro', '$pontual', '$id_cidade' )";
   $resp = pg_query($dbcon, $cadastrar);
    if($resp){
      echo "<font size=1 face=Verdana, Arial, Helvetica, sans-serif><br><br>Vaga cadastrada</font></div>";
		}
	}

 else {
echo "Não foi possível efetuar o cadastro<br><br>";

}


?>

 
</font></div>
</body>
</html>

