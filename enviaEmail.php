<?php
 
 require("PHPMailer-master/src/PHPMailer.php");
 require("PHPMailer-master/src/SMTP.php");

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $menssagem = $_POST['menssagem'];
 //echo $nome." - ".$email." - ".$menssagem;

 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "mail.studiovivianmartins.com.br";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "cadastro@studiovivianmartins.com.br";
 $mail->Password = "Cad@2022";
 $mail->SetFrom($email);
 $mail->Subject = "Nova mensagem de ".$nome." para o Site studiovivianmartins.com.br";
 $mail->Body = $menssagem;
 $mail->AddAddress("vivian.vms@hotmail.com");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
       echo "<script type = 'text/javascript'> location.href ='index.php'</script>"; 
    } 
           
?>