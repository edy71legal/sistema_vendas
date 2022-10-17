<?php
	session_start();

echo "bem vindo ". $_SESSION['usuarioNome']; echo "  ao nivel <b>CLIENTE</b> ao nosso sistema de cadastro";
	
?>
<br>
<a href="sair.php">Sair</a>