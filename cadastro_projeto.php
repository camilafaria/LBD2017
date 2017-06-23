<html>
<head>
<title>Documento sem t&iacute;tulo</title>



</head>

<body>

<div align="center">
  <form action="enviar_cadastro_projeto.php" method="post" name="cadastro" target="meio" id="cadastro"  onSubmit="return valida();">
    <table width="522" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" colspan="2"><p align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>DADOS DO 
                PROJETO</strong><br>
          </font></p>
        </td>
      </tr>
      <tr>
        <td width="145" height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome
            Projeto:<font color="#FF0000">*</font></font></td>
        <td width="377" height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="nome_projeto" type="text" id="nome_projeto" size="30" maxlength="40">
        </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Descri&ccedil;&atilde;o:<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <textarea name="descricao" cols="60" rows="10" id="descricao"></textarea>
        </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">CPF<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="cpf" type="text" id="cpf" size="20" maxlength="15">
        </font></td>
      </tr>
      <tr>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Id Instituição<font color="#FF0000">*</font></font></td>
        <td height="20"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
          <input name="id_instituicao" type="text" id="id_instituicao" size="20" maxlength="15">
        </font></td>
      </tr>

      <tr>
        
      <tr>
        <td height="20">&nbsp;</td>
        <td height="20"><input type="submit" name="Submit" value="Enviar">
            <input type="reset" name="Submit2" value="Limpar">
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
