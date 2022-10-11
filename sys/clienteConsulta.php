<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
  require_once("conexao.php");
    $nomm = $_GET["nome"];
	$sql = "SELECT Nome FROM tblCliente WHERE Nome  = '$nomm'";
	$results = mysqli_query($conexao,$sql) or die (mysql_error());
	  while ( $row = mysqli_fetch_array($results )) {
		if(!empty($row["Nome"]))
		   echo $row["Nome"].'        ';
		   echo "<script>alert('Este Cliente ja Existe no Sistema!!'); location.reload(true);</script>";
	       exit; 
      }
 
?>