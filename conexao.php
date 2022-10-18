<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "sistema_login";
	
	
// create connection
$connect = new mysqli($servidor, $usuario, $senha, $dbname);

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}




	
?>