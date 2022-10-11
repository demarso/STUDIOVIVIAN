<?php
 
 include("conexao.php");
 
 // Getting the received JSON into $json variable.
 $json = file_get_contents('php://input');
 
 // Decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);
  
 // Recebe os dados
 $dataCad = $obj['dataCad'];
 $dataAgenda = $obj['dataAgenda'];
 $horaAgenda = $obj['horaAgenda'];
 $nomeAgenda = $obj['nomeAgenda'];
 $celularAgenda = $obj['celularAgenda'];
 $servicoAgenda = $obj['servicoAgenda'];
 
  
 $agendaQuery = "INSERT INTO tblPreAgenda (dataCad, dataServico, horaServico, nome, celular, servico) 
                VALUES (' $dataCad' , '$dataAgenda', '$horaAgenda', '$nomeAgenda', '$celularAgenda',' $servicoAgenda') ";
               $check = mysqli_query($conn,$agendaQuery) or die (mysql_error());

	if(isset($check)){
		
		 // Successfully Login Message.
		 $onCadSuccess = 'Cadastro OK';
		 
		 // Converting the message into JSON format.
		 $SuccessMSG = json_encode($onCadSuccess);
		 
		 // Echo the message.
		 echo $SuccessMSG ; 
	 
	 }
	 
	 else{
	 
		 // If Email and Password did not Matched.
		$InvalidMSG = 'Não foi possível cadastrar. Tente Novamente!' ;
		 
		// Converting the message into JSON format.
		$InvalidMSGJSon = json_encode($InvalidMSG);
		 
		// Echo the message.
		 echo $InvalidMSGJSon ;
	 
	 }
 
 mysqli_close($conn);
?>