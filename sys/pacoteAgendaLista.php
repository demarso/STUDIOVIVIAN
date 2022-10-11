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
  
    <form name='form1' action='<? $myself ?>' method='post'>
    <tabel>
    <tr>
           <td><font color="cyan"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECIONE AS DATAS:</b></font>
           
          &nbsp;&nbsp;&nbsp;&nbsp;
          <font size="5">Data Inicial:</font>&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="date" name="data1" id="data1" size="15" tabindex="3"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <font size="5">Data Final:</font>&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="date" name="data2" id="data2" size="15" tabindex="3">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="submit" value="BUSCAR" onclick="this.form.submit()">
          </td>
    
    </tr>
    </tabel>
    </form> 
<?php
   // }  
   if(isset($_POST['data1'])){
      $data1 = $_POST['data1'];
      $data2 = $_POST['data2'];}
   else{
      $data1 = date('Y/m').'/'.date(1, mktime(0,0,0, date('m'),'01', date('Y')));
      $data2 = date('Y/m').'/'.date("t", mktime(0,0,0, date('m'),'01', date('Y')));//date("Y/m/d");
      }
 
//if(isset($_POST['data1'])){
?>
   <div class="container-fluid"><br />
      <center><h1 class="text-secondary">LISTA DA AGENDA DE PACOTES</h1></center>
  <h2 class="text-info">Pacotes de <? echo date('d/m/Y',strtotime($data1))." a ".date('d/m/Y',strtotime($data2)) ?></h2>
<table id="tabela" align="center" width="100%" border="1">
   <thead>
      <tr align="center" bgcolor="#CCCCCC">
        <th align="center" style="width: 10%"><font color="#333333" size="2"><b>Edit/Del</b></font></th>
        <th align="center" style="width: 5%"><font color="#333333" size="2"><b>N&ordm;</b></font></th>
        <th align="center" style="width: 24%"><font color="#333333" size="2"><b>Cliente</b></font></th>
        <th align="center" style="width: 15%"><font color="#333333" size="2"><b>Pacote</b></font></th>
        <th align="center" style="width: 25%"><font color="#333333" size="2"><b>Serviço</b></font></th>
        <th align="center" style="width: 8%"><font color="#333333" size="2"><b>Data do Serviço</b></font></th>
        <th align="center" style="width: 8%"><font color="#333333" size="2"><b>Hora do Serviço</b></font></th>
        <th align="center" style="width: 5%"><font color="#333333" size="2"><b>Status</b></font></th>
              
    <tr align="center" bgcolor="#CCCCCC">
      <th align="center" style="width: 10%"></th>
      <th align="center" style="width: 5%"></th>
      <th align="center" style="width: 24%"><input type="text" id="txtColuna3" size="15%"/></th>
      <th align="center" style="width: 15%"><input type="text" id="txtColuna4" size="10%"/></th>
      <th align="center" style="width: 25%"><input type="text" id="txtColuna5" size="20%"/></th>
      <th align="center" style="width: 8%"><input type="text" id="txtColuna6" size="5%"/></th>
      <th align="center" style="width: 8%"><input type="text" id="txtColuna7" size="5%"/></th>
      <th align="center" style="width: 5%"><input type="text" id="txtColuna8" size="5%"/></th>
    </tr>
    </thead>
 </table>

    <?php
        include "conexao.php";
        $ano = date("Y");
        $today = date("d/m/Y");
        $con = 1; $soma = 0;
        $sql = "SELECT *, DATE_FORMAT(Data,'%d/%m/%Y') AS dat, DATE_FORMAT(Hora,'%H:%m') AS hor FROM tblPacoteAgenda WHERE Data >= '$data1' and Data <='$data2'ORDER BY Data desc";
        $resultado = mysqli_query($conn,$sql) or die (mysql_error());
        while ($linha = mysqli_fetch_array($resultado)) {
    
            $id = $linha['idPacServ'];
            $cliente = $linha['IDCliente'];
            $data = $linha['dat'];
            $hora = $linha['hor'];
            $servico = $linha['idServico'];
            $pacote = $linha['idPacote'];
            $status = $linha['Status'];
            
                          
            if ($con % 2 == 0)
                 $bgcolor = "bgcolor='#FFFFFF'";
            else
                 $bgcolor = "bgcolor='#FFFFCC'";

           if ($dataservico < $today)
                 $txcolor = "color='red'";
            else
                 $txcolor = "color='black'";

            if ($status == 1)
                 $status2 = " <img src=\"images/tick_verde2.png\" width=\"20\" border=\"0\"/>";
            else if ($status == 0)
                 $status2 = " <img src=\"images/x_vermelho.png\" width=\"20\" border=\"0\"/>";           
     ?>
   <center>
    <table id="tabela" align="center" width="100%"  border="1">
     <tbody>
      <tr align="center" <? echo $bgcolor; ?>>
        <td align="center" style="width: 10%">
           <?
           echo "<a href=\"javascript:checar1('agendaDedita.php?id=".$id."');\"><img src=\"images/letra-e.png\" width=\"20\" border=\"0\" alt=\"Click para editar a Pessoa.\" title=\"Click para editar a Pessoa.\"></a>&nbsp;&nbsp;&nbsp;&nbsp;";
           echo "<a href=\"javascript:checar2('agendaDeleta.php?id=".$id."');\"><img src=\"images/letra-d.png\" width=\"20\" border=\"0\" alt=\"Click para deletar a Pessoa.\" title=\"Click para deletar a Pessoa.\"></a>&nbsp;&nbsp;&nbsp;&nbsp;";
           if ($status == 0){
            echo "<a href=\"javascript:checar3('pacoteOk.php?id=".$id."');\"><img src=\"images/tick_verde.png\" width=\"20\" border=\"0\" alt=\"Click para deletar a Pessoa.\" title=\"Click para serviço executado.\"></a>";
           }
           if($status == 1){
            echo "<a href=\"javascript:checar3a('pacoteDesOk.php?id=".$id."');\"><img src=\"images/tick_vermelho.png\" width=\"20\" border=\"0\" alt=\"Click para deletar a Pessoa.\" title=\"Click para serviço executado.\"></a>";
           }
           ?>
        </td>
        <td align="center" style="width: 5%" ><font <? echo $txcolor; ?> size="2"><b><? echo $con; ?></b></font></td>
        <td align="center" style="width: 24%"><font <? echo $txcolor; ?> size="2"><b><? echo $cliente; ?></b></font></td>
        <td align="center" style="width: 15%"><font <? echo $txcolor; ?> size="2"><b><? echo $pacote; ?></b></font></td>
         <td align="center" style="width: 25%"><font <? echo $txcolor; ?> size="2"><b><? echo $servico; ?></b></font></td>
         <td align="center" style="width: 8%"><font <? echo $txcolor; ?> size="2"><b><? echo $data; ?></b></font></td>
        <td align="center" style="width: 8%"><font <? echo $txcolor; ?> size="2"><b><? echo $hora; ?></b></font></td>
        <td align="center" style="width: 5%"><font <? echo $txcolor; ?> size="2"><b><? echo $status2; ?></b></font></td>
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
      <script type="text/javascript">
         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
              // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }

       
              function tonal(tipo){
                     var a = tipo;
                     document.location = "consProducao.php?tip="+a;
              }

              function mudaFoto(foto){
                      document.getElementById("icone").src = foto;
              }

              function checar1(pagina) 
             { 
                if (confirm("CONFIRMA A EDICAO DA PESSOA?")==true) 
                  { 
                    window.location=pagina; 
                  } 
             }

              function checar2(pagina) 
              { 
                if (confirm("CONFIRMA A ELIMINAÇÃO DA PESSOA DO BANCO DE DADOS?")==true) 
                  { 
                    window.location=pagina; 
                  } 
              }

              function checar3(pagina) 
              { 
                if (confirm("CONFIRMA A EXECUÇÃO DESSE SERVIÇO?")==true) 
                  { 
                    window.location=pagina; 
                  } 
              }
              function checar3a(pagina) 
              { 
                if (confirm("CONFIRMA O CANCELAMENTO DA EXECUÇÃO DESSE SERVIÇO?")==true) 
                  { 
                    window.location=pagina; 
                  } 
              }

              function checar4(pagina, title, w, h) 
              { 

                var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;  
                var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;  
                          
                width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;  
                height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  
                          
                var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
                var top = ((height / 2) - (h / 2)) + dualScreenTop;  
                var newWindow = window.open(pagina, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  
              
                // Puts focus on the newWindow  
                if (window.focus) {  
                    newWindow.focus();  
                }  
                /*if (confirm("IMPRESSÃO DOS DADOS DA PESSOA?")==true) 
                  { 
                    window.open(pagina,'_blank')
                    //window.location=pagina; 
                  } */
              }

              function checar4(pagina, title, w, h) 
              { 
                var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;  
                var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;  
                          
                width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;  
                height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  
                          
                var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
                var top = ((height / 2) - (h / 2)) + dualScreenTop;  
                var newWindow = window.open(pagina, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  
              
                // Puts focus on the newWindow  
                if (window.focus) {  
                    newWindow.focus();  
                }  
               /* if (confirm("CONFIRMA FOTOGRAFAR PESSOA?")==true) 
                  { 
                    window.open(pagina,'_blank')
                    //window.location=pagina; 
                  } */
              }

              function ver(pagina, title, w, h){
                var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;  
                var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;  
                          
                width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;  
                height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  
                          
                var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
                var top = ((height / 2) - (h / 2)) + dualScreenTop;  
                var newWindow = window.open(pagina, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  
              
                // Puts focus on the newWindow  
                if (window.focus) {  
                    newWindow.focus();  
                }  
                     /*var v = tip;
                     document.location = "cadPessoa_ver.php?tip="+v;*/
              }
            
                 $(function(){
                 $("#tabela input").keyup(function(){       
                  var index = $(this).parent().index();
                  var nth = "#tabela td:nth-child("+(index+1).toString()+")";
                  var valor = $(this).val().toUpperCase();
                  var soma = 0; 
                  var col = 0;

                  
                  $("#tabela tbody tr").show();
                  $(nth).each(function(){
                      if($(this).text().toUpperCase().indexOf(valor) < 0){
                          $(this).parent().hide();
                      }
                      else{ 
                            soma += parseFloat($('td:nth-child(8)', $(this).parents('tr')).text()); //parseFloat($(this).text()); 
                          }
                      
                      var campos = $(".campo");
                      //converter coleção de elementos em array.
                      campos = [].slice.apply(campos);
                      $(document).on("input", campos, function (event) {
                        col = (campos.indexOf(event.target) + 1);
                      });


                     var numero = soma.toFixed(2).split('.');
                     numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
                     numero.join(','); 
                     //if(col == 8){
                        $("#resultado").val(numero);
                    // }
                  });
              });
           
              $("#tabela input").blur(function(){
                  $(this).val("");
              });
          });    


      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
    </div>
  </body>
</html>

