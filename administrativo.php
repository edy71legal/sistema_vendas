<?php
	session_start();
	ECHO "<BR>";
	echo "bem vindo ". $_SESSION['usuarioNome']; echo "  ao <b>nivel administrativo</b> a nosso sistema de cadastro";
	

?>

<br>
<a href="sair.php">Sair</a>