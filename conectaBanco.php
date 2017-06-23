 <?php
	$con_string = "host=localhost port=5432 dbname=lbd user=postgres password=1234";
    $dbcon = pg_connect($con_string) or die('Connection failed');
    
    /* Conectar ao banco de dados, inserir, deletar, fazer updates... */
    function conectarDB(){
    	$dbcon = pg_connect($con_string) or die('Connection failed');
        return $dbcon;
    }
    
    /* Fecha a conexão com o banco de dados */
    function fecharDB(){
        pg_close($con_string);
    }
?>