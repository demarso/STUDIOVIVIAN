<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if (!isset($_SESSION['id'])){
    header("Location: index.php?erro=1");
    exit;
 }
 $hoje = date('Y/m/d');
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
      <title>PACOTES</title>
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
    <style>
        .form-group{
            padding: 10px;
        }
        .mesmo-tamanho {
            width: 5%;
            white-space: normal;
        }
      </style>
   </head>
   <!-- body -->
  <body class="main-layout bg-light">
      <header>
            <?php  include ('menu.php'); ?>
      </header>
    <br /><br /><br /><br />

  <div class="container">

    <font class="text-secondary" face="Verdana" size="10px">Agendar Pacotes</font>
      
    <form name="form1" method="post" action='<? $myself ?>' >
      <!-- ****************************************************************************************** -->
      <?  if (!$_POST['pacote']){ ?>            
          <div class="form-group row mt-2 mb-1">
            <label class="col-sm-1 col-form-label text-success" for="datacadA">Cadastro:</label>
            <div class="col-md-3">
              <input type="date" class="form-control" name="datacad" id="datacad" tabindex="-1" value="<?php echo date('Y-m-d',strtotime($hoje));?>">
            </div>&nbsp;&nbsp;
          </div>     
      <!-- ******************************************************************************************* -->           
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-1 col-form-label text-success" for="nome">Cliente:</label>
            <div class="col-md-6">
              <select class="form-control" name="cliente" id="cliente" tabindex="1" required="true">
               <option value="">---</option>
                <?php
                  include ("conexao.php");
                  $sql = "SELECT Nome FROM tblCliente WHERE status=1 ORDER BY Nome";
                  $results = mysqli_query($conn,$sql);
                  while ( $row = mysqli_fetch_array($results) ) {
                    echo "<option value='".$row[0]."'>".$row[0]."</option>";
                  }
                ?>
              </select>
           </div>
          </div>
      <!-- ************************************************************************************************ -->  
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-1 col-form-label text-success" for="nome">Pacote:</label>
            <div class="col-md-6">
              <select class="form-control" name="pacote" id="pacote" tabindex="1" required="true">
               <option value="">---</option>
                <?php
                  include ("conexao.php");
                  $sql = "SELECT distinct(Pacote) FROM tblPacotes WHERE Status=1 ORDER BY Pacote";
                  $results = mysqli_query($conn,$sql);
                  while ( $row = mysqli_fetch_array($results) ) {
                    echo "<option value='".$row[0]."'>".$row[0]."</option>";
                  }
                ?>
              </select>
            </div>
          </div>
          <!-- ******************************************************************************************* -->
          <div class="form-group row mt-1 mb-1">
             <td colspan="4" align="center"><hr align="center" width="600" size="1" color=red></td>
          </div>

          <div class="form-group row mt-1 mb-1">
            <input type="submit" size="150" value="REGISTRAR">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input type="reset" value="LIMPA" /></td> 
          </div>
  <?  } ?>
    </form>
<!-- ****************************************************************************************************** -->
  <? if ($_POST['pacote']){ 
     $pacote1 = $_POST['pacote'];
     $cliente1 = $_POST['cliente'];
  ?>
    <form name="form1" method="post" action='pacoteAgendaCadOK.php'>
      <font class="text-primary" face="Verdana" size="5px">Pacote:<font class="text-danger"><?php echo $pacote1; ?></font></font>
      &nbsp;&nbsp;&nbsp;&nbsp;
       <font class="text-primary" face="Verdana" size="5px">Cliente:<font class="text-danger"><?php echo $cliente1; ?></font></font>
  <? 
     include ("conexao.php");
     $n = 0;
     

      $sql = "SELECT Servico, Quantidade FROM tblPacotes WHERE Pacote='$pacote1'";
      $results = mysqli_query($conn,$sql);
      while ( $row = mysqli_fetch_array($results) ) {
            $servico = $row['Servico'];
            $quantidade = $row['Quantidade'];
            
 
       for($n=0;$n<$quantidade;$n++){ 
 ?>    
        <div class="form-group row mt-2 mb-1">
           <input type="text" class="form-control" name="pacote" tabindex="-1" value="<?php echo $pacote1; ?>" hidden="true">
           <input type="text" class="form-control" name="cliente" tabindex="-1" value="<?php echo $cliente1; ?>" hidden="true">
            <label class="col-sm-2 col-form-label text-dark" for="servico">Servi??o: <?php echo $n+1; echo "-";echo $q+1; ?></label>
            <div class="col-md-3">
             <input type="text" class="form-control" name="servico[]" tabindex="-1" value="<?php echo $servico; ?>">
            </div>&nbsp;&nbsp;
          
           <label class="col-sm-1 col-form-label text-dark" for="dataservico">Data:</label>
            <div class="col-md-3">
              <input type="date" class="form-control" name="dataservico[]" tabindex="-1">
            </div>&nbsp;&nbsp;
            <!-- ******************************************************************************************* -->
            <label class="col-sm-1 col-form-label text-dark" for="horaservico">Hora:</label>
            <div class="col-md-1">
              <input type="time" name="horaservico[]" min="08:00" max="22:00">
            </div>
      </div>
 <? } $n = $n + 1; } ?>    
        <!-- ******************************************************************************************* -->
          <div class="form-group row mt-1 mb-1">
		         <hr align="center" width="600" size="1" color=red>
		      </div>
		    <!-- ********************************************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
		        <input type="submit" size="150" value="REGISTRAR">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		        <input type="reset" value="LIMPA" /></td> 
		      </div>  
    </form>
    
    <? } ?>
   <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="button" onClick="window.open('cadSaldo.php?sa=<? //echo $saldo; ?>')" value="TRANSFERIR SALDO">-->
  
     <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>?? 2020-<? echo date("Y"); ?> Todos os Direitos Reservados. <a href="https://idbras.com.br/">IDBRAS</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/micoxAjax.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
            
        $(function() {
                var d=1000;
                $('#menu span').each(function(){
                    $(this).stop().animate({
                        'top':'-17px'
                    },d+=250);
                });

                $('#menu > li').hover(
                function () {
                    var $this = $(this);
                    $('a',$this).addClass('hover');
                    $('span',$this).stop().animate({'top':'40px'},300).css({'zIndex':'10'});
                },
                function () {
                    var $this = $(this);
                    $('a',$this).removeClass('hover');
                    $('span',$this).stop().animate({'top':'-17px'},800).css({'zIndex':'-1'});
                }
            );
            });
        
        function maskIt(w,e,m,r,a){
          // Cancela se o evento for Backspace
          if (!e) var e = window.event
          if (e.keyCode) code = e.keyCode;
          else if (e.which) code = e.which;
          // Vari??veis da fun????o
          var txt  = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
          var mask = (!r) ? m : m.reverse();
          var pre  = (a ) ? a.pre : "";
          var pos  = (a ) ? a.pos : "";
          var ret  = "";
          if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;
          // Loop na m??scara para aplicar os caracteres
          for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
          if(mask.charAt(x)!='#'){
          ret += mask.charAt(x); x++; } 
          else {
          ret += txt.charAt(y); y++; x++; } }
          // Retorno da fun????o
          ret = (!r) ? ret : ret.reverse()  
          w.value = pre+ret+pos; }
          // Novo m??todo para o objeto 'String'
          String.prototype.reverse = function(){
          return this.split('').reverse().join(''); 
        };

        function number_format( number, decimals, dec_point, thousands_sep ) {
          var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
          var d = dec_point == undefined ? "," : dec_point;
          var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
          var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
          return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        }

        function calcula(operacion){ 
          var operando1 = parseFloat( document.calc.operando1.value.replace(/\./g, "").replace(",", ".") );
          var operando2 = parseFloat( document.calc.operando2.value.replace(/\./g, "").replace(",", ".") );
          var result = eval(operando1 + operacion + operando2);
          document.calc.resultado.value = number_format(result,2, ',', '.');
        } 

          
        
         
       
      
          
       
  </script>
  
</body>
</html>