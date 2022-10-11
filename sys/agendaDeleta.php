<?php

    include "conexao.php";
   
   $id = $_GET['id'];
      
     $query = mysqli_query($conn,"DELETE FROM tblAgenda WHERE idAgenda = '$id'") or die(mysql_error());
        
    
      echo "<script type = 'text/javascript'> location.href = 'clienteAgendaLista.php'</script>"; 
   
?>