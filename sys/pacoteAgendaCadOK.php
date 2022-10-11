<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if (!isset($_SESSION['id'])){
    header("Location: index.php?erro=1");
    exit;
 }
 
   
  include ("conexao.php");
  $n = 0;
  $pacote = $_POST["pacote"];
  $cliente = $_POST["cliente"];
  $servicos = $_POST["servico"];
  $datas = $_POST["dataservico"];
  $horas = $_POST["horaservico"];
 
   foreach ($servicos as $servico) {
    //echo $cliente." / ".$pacote." / ".$servicos[$contA]." / ".$datas[$contA]." / ".$horas[$contA]."<br />";
         
        $sql1 = "SELECT IDCliente FROM tblCliente WHERE Nome='$cliente'";
        $resultado1 = mysqli_query($conn,$sql1) or die (mysql_error());
        while ($linha1 = mysqli_fetch_array($resultado1)) {
                $idcliente = $linha1['IDCliente'];}

        $sql2 = "SELECT idPacote FROM tblPacotes WHERE Pacote='$pacote'";
        $resultado2 = mysqli_query($conn,$sql2) or die (mysql_error());
        while ($linha2 = mysqli_fetch_array($resultado2)) {
                $idpacote = $linha2['idPacote']; } 
          
   
    //echo $idcliente." ".$idpacote." ".$servicos[$n]." ".$datas[$n]." ".$horas[$n]."<br />";   
    //for ($n=0;$n<$contA;$n++){
       //echo $idcliente." ".$idpacote." ".$servicos[$n]." ".$datas[$n]." ".$horas[$n]."<br />"; }
       $sql3 = "SELECT idServico FROM tblServicos WHERE Servico='$servicos[$n]'";
        $resultado3 = mysqli_query($conn,$sql3) or die (mysql_error());
        while ($linha3 = mysqli_fetch_array($resultado3)) {
                $idservico = $linha3['idServico'];} 
     //echo $n." = ".$idservico." / ".$datas[$contA]." / ".$horas[$contA]."<br />";}
      //$contA = 0;
    $sql = "INSERT INTO tblPacoteAgenda (IDCliente,idPacote,idServico,Data,Hora,Status) VALUES ( '$idcliente','$idpacote','$idservico','$datas[$n]','$horas[$n]',1)";
     $result = mysqli_query($conn,$sql) or die ("Cadastro da agenda do Pacote não realizado.");
   $n  = $n + 1;
   }
   $n = 0;
   echo "<script type = 'text/javascript'> location.href = 'pacoteAgendaCad.php'</script>"; 
 
?>
