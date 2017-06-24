<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>

<?php

include("conectaBanco.php");

session_start("teste");

$nome=$_SESSION['nome'];
$descricao=$_SESSION['descricao'];


$select = "select id_vaga, id_projeto, nome from pessoa_vaga where nome = '$nome' AND descricao = '$descricao'";
echo"$select";

?>


</head>

<body>





</body>
</html>