<!-- exclui o registro pesquisado -->

<title> exclui o registro da tabela</title>
<?php
require("conectaBanco.php");
$id =$_POST['id_vaga'];

pg_query("delete  from pessoa_vaga WHERE id_vaga ='$id_vaga'");
print"
 <META HTTP-EQUIV=REFRESH CONTENT='0; URL=seleciona_exclusao_adm.php'>
 <script type=\"text/javascript\">
 alert(\"Atenção: Exclusão efetuada com sucesso. Aguarde enquanto você é redirecionado para sua área administrativa!\");
 </script>
 ";

?>
