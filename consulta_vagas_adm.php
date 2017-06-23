<!-- Atenção - Formulario que altera pelo campo nome -->
<?php 

include ("conectaBanco.php");

session_start("teste");
$login=$_SESSION['login'];

$select = "select cpf from pessoa where nome_de_usuario='$login'";
$usuario = pg_query($dbcon, $select);
?>
<title> Alteração de dados - formulario </title>

<h1 align = "center"> Altera cadastro </h1>

<form action = "pesquisa.php" method = "post" name = "form1" target="meio2" id ="form1">
<p align ="center">
<label for ="nome"> <b>Selecione a Vaga inscrita:</b></label>

<?php

$busca= "select * from pessoa_vaga where cpf = '$select'";
$resultado2 = pg_query($dbcon, $busca);
?>
<select name ="id_vaga" id ="id_vaga">

<?php
while ($linha = pg_fetch_array($resultado2)){
?>
<option value ="<?php echo $linha['id_vaga']; ?>"><?php echo $linha ['id_vaga'];
?></opition>
<?php
}
?>
</select>
</p>
<p align ="center">
<input type ="submit" name ="button"
id = "button" value= "Enviar"/>
</p>
</form>