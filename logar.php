<?php

include ("conectaBanco.php");

$senha = $_POST["senha"];
$login = $_POST["login"];


$resultado = pg_query("SELECT nome_de_usuario, senha FROM pessoa WHERE nome_de_usuario='$login' AND senha='$senha'");
$linha = pg_fetch_row($resultado);
 $loginbanco = $linha[0];
 $senhabanco = $linha[1];

if($loginbanco == $login and $senhabanco == $senha){

 session_start("teste");
 $_SESSION['login']=$login;
 $_SESSION['senha']=$senha;


echo "<script language=\"JavaScript\">function redireciona() {window.location=\"adm.php\";}redireciona();</script>";

}
else{
 echo  
	  "
    <META HTTP-EQUIV=REFRESH CONTENT='0; URL=login.html'>
    <script type=\"text/javascript\">
    alert(\"Erro: Usuário ou senha inválidos!\");
    </script>
    ";
}
?>