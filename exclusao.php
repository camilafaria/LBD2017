<!-- carrega os dados na tabela no formulario para alterar-->
<?php
require("conectaBanco.php");

$id_vaga = $_POST['id_vaga'];
$sql = "SELECT * FROM pessoa_vaga where id_vaga ='$id_vaga'";
$resultado = pg_query("$sql");

$linha = pg_fetch_array($resultado);

?>

<title> mostra nome a ser excluidos </title>
<form action="excluir.php" method = "post" name ="form1" target="meio2" id ="form1">
<table width="381" border="0" align="center">
  <tr>
    <td width="187">CPF</td>
    <td width="184"><label for="cpf"></label>
      <input type="text" name="cpf" id="cpf" value=" <?php echo $linha['cpf'];?>"/></td>
  </tr>
  <tr>
    <td>Id Vaga</td>
    <td><label for="id_vaga"></label>
      <input type="text" name="id_vaga" id="id_vaga" value=" <?php echo $linha['id_vaga'];?>"/></td>
  </tr>
  <tr>
    <td>Id Projeto</td>
    <td><label for="id_projeto"></label>
      <input type="text" name="id_projeto" id="id_projeto" value="<?php echo $linha['id_projeto'];?>"/></td>
  </tr>
  <tr>
    <td>Data e Hora</td>
    <td><label for="c"></label>
      <input type="text" name="data_e_hora" id="data_e_hora" value="<?php echo $linha['data_e_hora'];?>"/></td>
  </tr>
  <tr>
    <td>Observações</td>
    <td><label for="observacoes"></label>
      <input type="text" name="observacoes" id="observacoes" value="<?php echo $linha['observacoes'];?>"/></td>
  </tr>
  <tr>
    <td>Presença Confirmada</td>
    <td><label for="presenca_confirmada"></label>
      <input type="text" name="presenca_confirmada" id="presenca_confirmada" value="<?php echo $linha['presenca_confirmada'];?>"/></td>
  </tr>
  <tr>
<th scope ="row"></th>
<td><input type ="submit" name ="button" id="button"value = "excluir" value = "Alterar"/></td>
</tr>
</table>
</form>