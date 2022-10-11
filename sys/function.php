<?php
include_once("conexao.php");

function retorna($dataservico, $conn){
	$result = "SELECT * FROM tblAgenda WHERE DataServico = '$dataservico' LIMIT 1";
	$resultado = mysqli_query($conn, $result);
	if($resultado->num_rows){
		$row = mysqli_fetch_assoc($resultado);
		$valores['horaservico'] = $row['HoraInicio'];
		
	}
	return json_encode($valores);
}

if(isset($_GET['dataservico'])){
	echo retorna($_GET['dataservico'], $conn);
}
?>