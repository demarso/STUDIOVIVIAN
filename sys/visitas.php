<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if (!isset($_SESSION['id'])){
    header("Location: index.php?erro=1");
    exit;
 }
 $hoje = date('Y/m/d');
 $mes = date('m');
 $ano = date('Y');
 ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Vivian Martins</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout bg-light">
      <!-- header -->
      <header>
      <!-- header inner -->
      <?php  include ('menu.php'); ?>
      </header>
      <br /><br /><br /><br />

  <div class="container"><br />
      <center><h1 class="text-info">VISITAS AO SITE</h1></center>
   <div class="col-md-12 text-right">
   <input class="form-control" id="myInput" type="text" placeholder="Digite aqui a sua busca...">
   </div>
<table id="tabela" align="center" width="100%" border="1">
   <thead>
      <tr align="center" bgcolor="#CCCCCC">
        <th align="center" style="width: 10%"><font color="#333333" size="2"><b>N&ordm;</b></font></th>
        <th align="center" style="width: 10%"><font color="#333333" size="2"><b>Data</b></font></th>
        <th align="center" style="width: 10%"><font color="#333333" size="2"><b>Hora</b></font></th>
        <th align="center" style="width: 10%"><font color="#333333" size="2"><b>IP</b></font></th>
        <th align="center" style="width: 15%"><font color="#333333" size="2"><b>País</b></font></th>
        <th align="center" style="width: 10%"><font color="#333333" size="2"><b>Estado</b></font></th>
        <th align="center" style="width: 15%"><font color="#333333" size="2"><b>Cidade</b></font></th>
        <th align="center" style="width: 10%"><font color="#333333" size="2"><b>Latitude</b></font></th>
        <th align="center" style="width: 10%"><font color="#333333" size="2"><b>Longitude</b></font></th>
    </thead>
 </table>

    <?php
        include "conexao.php";
        $ano = date("Y");
        $today = date("d/m/Y");
        $con = 1; $soma = 0;
        $sql = "SELECT *, DATE_FORMAT(Data,'%d/%m/%Y') AS dat FROM localizacao ORDER BY Data desc, Hora desc";
        $resultado = mysqli_query($conn,$sql) or die (mysql_error());
        while ($linha = mysqli_fetch_array($resultado)) {
            $data = $linha['dat'];
            $hora = $linha['Hora'];
            $ip = $linha['IP'];
            $pais = $linha['Pais'];
            $estado = $linha['Estado'];
            $cidade = $linha['Cidade'];
            $latitude = $linha['Latitude'];
            $longitude = $linha['Longitude'];
                                      
            if ($con % 2 == 0)
                 $bgcolor = "bgcolor='#FFFFFF'";
            else
                 $bgcolor = "bgcolor='#FFFFCC'";

           
     ?>
   <center>
    <table id="tabela" align="center" width="100%"  border="1">
     <tbody>
      <tr align="center" <? echo $bgcolor; ?>>
        <td align="center" style="width: 10%" ><font <? echo $txcolor; ?> size="2"><b><? echo $con; ?></b></font></td>
        <td align="center" style="width: 10%"><font <? echo $txcolor; ?> size="2"><b><? echo $data; ?></b></font></td>
        <td align="center" style="width: 10%"><font <? echo $txcolor; ?> size="2"><b><? echo $hora; ?></b></font></td>
        <td align="center" style="width: 10%"><font <? echo $txcolor; ?> size="2"><b><? echo $ip; ?></b></font></td>
         <td align="center" style="width: 15%"><font <? echo $txcolor; ?> size="2"><b><? echo $pais; ?></b></font></td>
        <td align="center" style="width: 10%"><font <? echo $txcolor; ?> size="2"><b><? echo $estado; ?></b></font></td>
        <td align="center" style="width: 15%"><font <? echo $txcolor; ?> size="2"><b><? echo $cidade; ?></b></font></td>
        <td align="center" style="width: 10%"><font <? echo $txcolor; ?> size="2"><b><? echo $latitude; ?></b></font></td>
        <td align="center" style="width: 10%"><font <? echo $txcolor; ?> size="2"><b><? echo $longitude; ?></b></font></td>
      </tr>
     </tbody>
      </table>
    </center>
    <? 
   
    $con = $con + 1;
    }

    $con = $con - 1;
   //}
    ?>    
    
   
      <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>© 2020-<? echo date("Y"); ?> Todos os Direitos Reservados. <a href="https://idbras.com.br/">IDBRAS</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
       <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
      <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tabela tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
    </div>
  </body>
</html>

