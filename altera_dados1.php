<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>



<?php
	include ("conectaBanco.php");

session_start("teste");
$login=$_SESSION['login'];

$select = "select * from pessoa where nome_de_usuario='$login'";
$usuario = pg_query($dbcon, $select) or print (error);

while($linha = pg_fetch_array($usuario)){
 $cpfbanco = $linha["cpf"];	
 $nomebanco = $linha["nome_completo"];
 $nascimentobanco = $linha["data_nascimento"];
 $emailbanco = $linha["email"];
 $papelbanco = $linha["papel"];
 $loginbanco = $linha["nome_de_usuario"];
 $senhabanco = $linha["senha"];
 $idcidadebanco = $linha["id_cidade"];


}
?>
</head>

<body>


<div align="center">
  <form action="altera_dados2.php" method="post" name="cadastro" target="_parent" id="cadastro"  onSubmit="return valida();">
    <table width="522" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" colspan="2"><p align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>DADOS
                PESSOAIS</strong><br>
          </font></p>
        </td>
      </tr>
      <tr>
        <td width="145" height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome
            completo:<font color="#FF0000">*</font></font></td>
        <td width="377" height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="nome_completo" type="text" id="nome2" value="<?php echo $nomebanco ?>" size="20" maxlength="40">
        (max. 40 digitos) </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Cpf:<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="cpf" type="text" id="cpf" value="<?php echo $cpfbanco ?>" size="20" maxlength="10">
        (max. 10 digitos) </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Data Nascimento:<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="data_nascimento" type="text" id="data_nascimento" value="<?php echo $nascimentobanco ?>" size="20" maxlength="10">
        </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Email:<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="email" type="text" id="email" value="<?php echo $emailbanco ?>" size="20" maxlength="15">
        (max. 15 digitos) </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Papel:</font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="papel" type="text" id="papel" value="<?php echo $papelbanco ?>" size="20" maxlength="15">
        (max. 15 digitos) </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Login:<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="nome_de_usuario" type="text" id="nome_de_usuario" value="<?php echo $loginbanco ?>" size="20" maxlength="40">
        (max. 40 digitos) </font></td>
      </tr>
     
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Senha:<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="senha" type="password" id="senha" value="<?php echo $senhabanco ?>" size="20" maxlength="15">
        (max. 50 digitos) </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Id Cidade:<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="id_cidade" type="text" id="id_cidade" value="<?php echo $idcidadebanco ?>" size="20" maxlength="30">
        (max. 30 digitos) </font></td>
      </tr>
          
      <tr>
        <td height="20">&nbsp;</td>
        <td height="20"><input type="submit" name="Submit" value="Atualizar dados">
        </td>
      </tr>
    </table>
  </form>
</div>

</body>
</html>