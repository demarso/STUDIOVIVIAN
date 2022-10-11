<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if (empty($_SESSION['id'])){
    header("Location: index.php?erro=1");
    exit;
 }
 
 include_once 'conexao.php';
  $contA = 0;
  $nomepacote = $_POST["nomepacote"];
  $servicos = $_POST["servico"];
  $quantidades = $_POST["quantidade"];
  foreach ($servicos as $servico) {
    $contA = $contA + 1;
  }
   
       // echo $cont."<br />";   
    for ($n=0;$n<$contA;$n++){
     // echo $n." = ".$servicos[$n]." - ".$quantidades[$n]."<br />";}
      //$contA = 0;
    $sql = "INSERT INTO tblPacotes (Pacote,Servico,Quantidade,Status) VALUES ( '$nomepacote','$servicos[$n]','$quantidades[$n]',1)";
     $result = mysqli_query($conn,$sql) or die ("Cadastro de Cliente não realizado.");
   }
   $contA = 0;
   echo "<script type = 'text/javascript'> location.href = 'pacoteCad.php'</script>";

/*
      $insert_aula = $conn->prepare($result_aula);
      $insert_aula->bindParam(':servico', $servico,':quantidade', $quantidade);
      //$insert_aula->bindParam(':quantidade', $quantidade);
      if ($insert_aula->execute()) {
          $cont_insert = true;
      } else {
          $cont_insert = false;
      }
  };
 }
  if ($cont_insert) {
      echo "<p style='color:green;'>Cadastrado com Sucesso</p>";
  } else {
      echo "<p style='color:red;'>Erro ao cadastrar</p>";
  }
*/
  ?>
