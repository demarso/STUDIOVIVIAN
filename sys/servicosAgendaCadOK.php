<?php

    include "conexao.php";
   
    $datacad = $_POST['datacad'];
    $dataservico = $_POST['dataservico'];
    $horainicio = $_POST['horaservico'];
    $cliente = strtoupper($_POST['cliente']);
    $servico = strtoupper($_POST['servico']);
    
    function segundos_em_tempo($segundos) {
     $horas = floor($segundos / 3600);
     $minutos = floor($segundos % 3600 / 60);
     $segundos = $segundos % 60;
     return sprintf("%02d:%02d:%02d", $horas, $minutos, $segundos);
    }


     $sql = "SELECT Tempo FROM tblServicos WHERE Servico='$servico' ORDER BY Servico";
     $results = mysqli_query($conn,$sql);
        while ( $row = mysqli_fetch_array($results) ) {
              $tempo = $row["Tempo"];
     } 
     
     $lista = array($horainicio, $tempo);
     $soma = 0;
     foreach($lista as $item) {
     list($horas,$minutos,$segundos) = explode(":",$item);
     $calc = $horas * 3600 + $minutos * 60 + $segundos;
     $soma = $calc + $soma;     
     }
     //echo "<p>".$dataservico." ".$horainicio." ".$tempo. "</p>";
     $horafim = segundos_em_tempo($soma);

     //echo $datacad." ".$dataservico." ".$horaservico." ".$cliente." ".$servico;
      
   
        $sql = "INSERT INTO tblAgenda(Datacad,DataServico,HoraInicio,HoraFim,Cliente,Servico,Status) 
            values('$datacad','$dataservico','$horainicio','$horafim','$cliente','$servico',0)";
        $result = mysqli_query($conn,$sql) or die ("Cadastro do Serviço não realizado.");
    
      echo "<script type = 'text/javascript'> location.href = 'servicosAgendaCad.php'</script>"; 
   
?>