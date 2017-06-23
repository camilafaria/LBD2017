<!-- Atenção - Formulario que altera pelo campo nome -->
<?php 

include ("conectaBanco.php");

session_start("teste");
$login=$_SESSION['login'];

$select = "select cpf from pessoa where nome_de_usuario='$login'";
$usuario = pg_query($dbcon, $select) or print (error);

?>


<title> Alteração de dados - formulario </title>

<h1 align = "center"> Exclusão de Vagas </h1>

<form action = "exclusao.php" method = "post" name = "form1" target="meio2" id ="form1">
<p align ="center">
<label for ="nome"> <b>Selecione o patrocinador:</b></label>


<?php

$busca= "select * from pessoa_vaga where cpf = '$resultado' order by id_vaga";
$resultado2 = pg_query($dbcon, $busca) or print (error);
?>
<select name ="id_vaga" id ="id_vaga">

<?php
while ($linha = pg_fetch_array($resultado2)){
?>
<option value ="<?php echo $linha['id_vaga']; ?>">
<?php echo $linha ['id_vaga'];?></opition>
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
