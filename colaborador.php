<?php
	session_start();

	include_once ("menu.inc");
    // echo "Usuario: ". $_SESSION['usuarioId'];
	//echo "Usuario: ". $_SESSION['usuarioEmail'];
	ECHO "<BR>";
	echo " <h5><center> bem vindo ". $_SESSION['usuarioNome']; echo "  ao <b>nivel colaborador</b> a nosso sistema de cadastro </center></h5>";

?>
