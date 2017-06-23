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
  <table width="522" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="20" colspan="2"><p align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>DADOS
              PESSOAIS</strong><br>
        </font></p>
      </td>
    </tr>
    <tr>
      <td width="145" height="20"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome
          completo:</font></td>
      <td width="377" height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $nomebanco ?>&nbsp; </font></td>
    </tr>
    <tr>
      <td height="20"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">CPF:</font></td>
      <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $cpfbanco ?></font></td>
    </tr>
    <tr>
      <td height="20"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">Data Nascimento:</font></td>
      <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $nascimentobanco ?></font></td>
    </tr>
    <tr>
      <td height="20"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">E-mail:</font></td>
      <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $emailbanco ?></font></td>
    </tr>
    <tr>
      <td height="20"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">Papel:</font></td>
      <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $papelbanco ?></font></td>
    </tr>
    <tr>
      <td height="20"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">Login:</font></td>
      <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $loginbanco ?></font></td>
    </tr>
    <tr>
      <td height="20"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></td>
      <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $senhabanco ?></font></td>
    </tr>
    <tr>
      <td height="20"><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">Id Cidade:</font></td>
      <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $idcidadebanco ?></font></td>
    </tr>
   
   </table>
</div>

</body>
</html>