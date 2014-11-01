<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
 
<body>
<?php 
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
 
$host= 'localhost';
$bd= 'cadastrobd';
$senhabd= 'root';
$userbd = 'userBD';
//$userbd = $bd; 
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$nome	= $_POST ["nomeEvento"];
$inicio	= $_POST ["inicio"];	
$fim	= $_POST ["fim"];	
$descricaoEvento	= $_POST ["descricaoEvento"];	
$nomeResponsavel	= $_POST ["nomeResponsavel"];	
$enderecoResponsavel	= $_POST ["enderecoResponsavel"];
$bday	= $_POST ["bday"];
$telefoneResponsavel	= $_POST ["telefoneResponsavel"];
$matriculaResponsavel	= $_POST ["matriculaResponsavel"];
$cursoResponsavel	= $_POST ["cursoResponsavel"];
$siapeResponsavel	= $_POST ["siapeResponsavel"];

//$enderecoLocalidade = $_POST["enderecoLocalidade"];
//$departamento = $_POST["campus"];
//$departamento = $_POST["instalacao"];
//$departamento = $_POST["departamento"];

//Gravando no banco de dados !
 
//conectando com o localhost - mysql
$conexao = mysql_connect($host,$userbd, $senhabd);
if (!$conexao)
	die ("Erro de conexao com localhost, o seguinte erro ocorreu ->".mysql_error());
//conectando com a tabela do banco de dados

$banco = mysql_select_db('cadastrobd',$conexao);
if (!$banco)
	die ("Erro de conexao com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
 
 
$query = "INSERT INTO eventos_cadastrados (id, nomeEvento, inicio, fim, descricaoEvento, nomeResponsavel, enderecoResponsavel, bday, telefoneResponsavel, matriculaResponsavel, cursoResponsavel, siapeResponsavel) VALUES (' ','$nome', '$inicio', '$fim','$descricaoEvento', '$nomeResponsavel', '$enderecoResponsavel', '$bday', '$telefoneResponsavel', '$matriculaResponsavel', '$cursoResponsavel', '$siapeResponsavel')";
 
mysql_query($query,$conexao);
 
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atencao.";
?> 
</body>
</html>
