<?php

require_once("conexao.php");
$id2 = $_GET['id'];

//echo $id2;

$sql_ini = "UPDATE tblPacotes SET Status=1 WHERE idPacoteAgenda = '$id2'";
mysqli_query($conn,$sql_ini) or die (mysql_error());
 
echo "<script type = 'text/javascript'> location.href = 'clienteAgendaLista.php'</script>"; 

?>