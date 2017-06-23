<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADM</title>
<?php

include("conectaBanco.php");

session_start("teste");

$login=$_SESSION['login'];

$select = "select * from pessoa where nome_de_usuario='$login'";

$usuario = pg_query($dbcon, $select);
while($linha = pg_fetch_array($usuario)){
$nomebanco = $linha["nome_completo"];
}

?>
</head>
<body>
	<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<style type="text/css">
#container{
	width:810px;
	height:600px;
	margin-left:auto;
	margin-right:auto;
}

#titulo{
	height:50px;
	width:810px;
}

#menu{
	height:43px;
	width:810px;
}

#conteudo{
	height:600px;
	width:810px;
	margin-top:7px;
}
</style>

<body bgcolor="#333333" onload="MM_preloadImages('Botões/a2.png','Botões/b2.png','Botões/c2.png','Botões/d2.png','Botões/f2.png','Botões/e2.png')">
<div id="container">
	<div id="titulo"><font color="#FFFFFF" size="+2"><center><h2>Seja Bem Vindo, <b><?php echo "$nomebanco" ?></b></h2></center></font></div>
    <div id="menu">
      <table width="650" border="0" align="center">
        <tr>
          <td width="100"><a href="meusDados.php" target="meio1"><input type="submit" name="button" id="button" value="Meus dados" /></a></td>
          <td width="100"><a href="altera_dados1.php" target="meio1"><input type="submit" name="button4" id="button4" value="Alterar dados" /></a></td>
          <td width="100"><a href="cadastro_projeto.php" target="meio1"><input type="submit" name="button3" id="button3" value="Cadastrar Projetos" /></a></td>
          <td width="100"><a href="cadastro_vaga.php" target="meio1"><input type="submit" name="button2" id="button2" value="Cadastrar vagas" /></a></td>
          <td width="100"><a href="vagas_adm.html" target="meio1"><input type="submit" name="button5" id="button5" value="Minhas inscrições" /></a></td>
          <td width="97"><input type="submit" name="button6" id="button6" value="Logout" /></td>
        </tr>
      </table>
</div>
    <div id="conteudo"><iframe name="meio1" src="#" width="810" height="700" frameborder="0"></iframe></div>
    </div>
    </body>
</html>
