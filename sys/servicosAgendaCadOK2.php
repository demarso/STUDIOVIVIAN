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
     $email = "vivian.vms@hotmail.com";
     //echo $datacad." ".$dataservico." ".$horaservico." ".$cliente." ".$servico;
     
   
        $sql = "INSERT INTO tblAgenda(Datacad,DataServico,HoraInicio,HoraFim,Cliente,Servico,Status) 
            values('$datacad','$dataservico','$horainicio','$horafim','$cliente','$servico',0)";
        $result = mysqli_query($conn,$sql) or die ("Cadastro do Serviço não realizado.");
    
        // Mensagem 
     $mensagem = "O(A) Cliente $cliente, acaba de agendar um serviço de $servico. ";

    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
    //==================================================== 
    $email_remetente = "contato@studiovivianmartins.com.br"; // deve ser uma conta de email do seu dominio 
    //====================================================
    
    //Configurações do email, ajustar conforme necessidade
    //==================================================== 
    //$email_destinatario = "$email"; // pode ser qualquer email que receberá as mensagens
    //$email_reply = "$email"; 
    $email_assunto = "AGENDAMENTO FEITO"; // Este será o assunto da mensagem
    //====================================================
    
    //Monta o Corpo da Mensagem
    //====================================================
    $email_conteudo = "Nome = $cliente \n"; 
    $email_conteudo .= "Serviço = $servico \n";
    $email_conteudo .= "Data = $dataservico \n";
    $email_conteudo .= "Hora = $horainicio \n"; 
    $email_conteudo .= "$mensagem \n"; 
    //====================================================
    
    //Seta os Headers (Alterar somente caso necessario) 
    //==================================================== 
    $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
    //====================================================
    
    //Enviando o email 
    //==================================================== 
    // if(isset($email_destinatario)){
        mail ($email, $email_assunto, nl2br($email_conteudo), $email_headers);
        //$query = mysqli_query($conn,"UPDATE tblPessoa SET emailNiver=1 WHERE IDPessoa = '$id'") or die(mysql_error());
     //}

      echo "<script type = 'text/javascript'> location.href = 'servicosAgendaClienteResposta.php'</script>"; 
   
?>