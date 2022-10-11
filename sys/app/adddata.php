<?php

	include 'conexao.php';
	
	$username = $_POST['usuario'];
	$password = $_POST['senha'];
	$nivel = $_POST['nivel'];
	
	
	$connect->query("INSERT INTO usuarios (usuario,password,nivel) VALUES ('".$username."','".$password."','".$nivel."')")

?>