<html> 
<head>
	<meta charset="UTF-8">
<title>Formulário cadastro de cliente </title>
</head>
<body> 
	<br>
	<br>
	<br>
	<br>

<?php

ini_set('default_charset','UTF-8');

 include "menu.inc";

?>

<div id= "aluno" align="center"> 	
<h3> Formulário para Inserir Dados do cliente </h3> 
<font size="5">

<form class="form-signin" method="POST" action="inserir_dados_clientes.php">

Nome : <input type="text" size="50"  name="nome" required/> <br><br>
Endereço : <input type="text" size="50" name="endereco" required/> <br><br> 
Telefone : <input type="text" size="50" name="telefone" required/> <br><br> 

<input type="submit" name="submit" value="Cadastrar" id="btncad">
<input type="button" value="Cancelar" id="btncan">
 
<br>

</font>
</form>
</div>
</body> 
</html>