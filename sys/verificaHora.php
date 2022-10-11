<?php

    $horaPostada1 = $_POST['hora'];
    $diaPostado = $_POST['dia'];
    $hora = date('H:i:s',strtotime($horaPostada1));
    
   echo $diaPostado." ". $hora." ".$Postada1$hora;
/*
    include ("conexao.php");
    $hocon = 0;
    $sql = "SELECT * FROM tblAgenda WHERE DataServico = '$diaPostado' and  HoraInicio <= '$hora' and HoraFim >= '$hora'";
    $results = mysqli_query($conn,$sql) or die (mysql_error());
      while ( $row = mysqli_fetch_array($results )) {
            $hocon = $hocon + 1;
   }
    
    if($hocon>0){
        echo "<script>alert('Horário já ocupado');history.back(-1);</script>";
        exit;
    }
   */
?>