<html> 
<head>
<meta charset="UTF-8">
<title> </title>
</head>
<body> 


<?php 

session_start();
// Comando para inserir dados no banco
include_once("conexao.php"); // include de abertura de conecção com banco

if($_POST) {
	$cli_name = $_POST['nome'];
	$cli_endereco = $_POST['endereco'];
	$cli_telefone = $_POST['telefone'];


	$sql = "INSERT INTO cad_cliente (codigo,nome,endereco,telefone) VALUES ('','$cli_name', '$cli_endereco', '$cli_telefone')";
	if($connect->query($sql) === TRUE) {
		
		ECHO "<BR>";
		ECHO "<BR>";
		ECHO "<BR>";
		ECHO "<BR>";
		ECHO "<BR>";
		echo "<center>";
		echo "<p><h2>Novo registro criado com sucesso</p></h2>";
		ECHO "<BR>";
		echo "<a href='cad_clientes.php'><button type='button' width=10 heidth=8 >Novo Cadastro</button></a>";
		ECHO "<BR>";
		ECHO "<BR>";
		ECHO "<BR>";
		echo "<a href='menu.inc'> <button type='button'>Voltar pagina principal</button></a>";
		echo "</center>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	
	$connect->close();
}


?>

</h2>
</body> 
</html>

