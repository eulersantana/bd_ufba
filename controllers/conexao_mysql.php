
<?php 
/**
* 
*/
class Conexao
{
	
	
	public function conexao()
	{

	    $host		= "localhost";
	    $username  = "root";
	    $password  = ""; //Deixa vazio quando fazer commit
	    $database 	= "ufbaconvida";
	    $port		= "";

		//conectando com o localhost - mysql
		try {
			$conexao = mysql_connect($host,$username, $password,$database);		
		} catch (Expection $e) {
			echo "Erro de conexao com localhost, o seguinte erro ocorreu: ".$e;
		}
				
		return $conexao;
 
	}
}

 ?>