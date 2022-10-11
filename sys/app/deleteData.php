<?php
	include 'conexao.php';
	$id=$_POST['id'];
	$connect->query("DELETE FROM usuarios WHERE id=".$id);

?>