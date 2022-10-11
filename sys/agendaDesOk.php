<?php

require_once("conexao.php");
$id2 = $_GET['id'];

//echo $id2;

$sql_ini = "UPDATE tblAgenda SET Status=0 WHERE idAgenda = '$id2'";
mysqli_query($conn,$sql_ini) or die (mysql_error());
 
echo "<script type = 'text/javascript'> location.href = 'servicoAgendaLista.php'</script>"; 

?>