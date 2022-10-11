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
      <title>SERVIÇOS</title>
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
      <header>
            <?php  include ('menu.php'); ?>
      </header>
    <br /><br /><br /><br />

  <div class="container">

    <font class="text-warning" face="Verdana" size="10px">Serviços</font>
    <font class="text-info" face="Verdana" size="3px">      
    <form name="form1" method="post" action="servicosCadOK.php" >
      <!-- ********************************************************************************************************************** -->          
          <div class="form-group row mt-2 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="datacadA">Data do Cadastro:</label>
            <div class="col-md-3">
              <input type="date" class="form-control" name="datacad" id="datacad" tabindex="-1" value="<?php echo date('Y-m-d',strtotime($hoje));?>">
            </div>
          </div>
        <!-- ********************************************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="valor">Serviço:</label>
            <div class="col-md-8">
		          <input type="text" name="servico" id="servico" size="60" tabindex="5" required="true">
		        </div>
          </div>
           <!-- ********************************************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="valor">Observação:</label>
            <div class="col-md-8">
              <input type="text" name="observacao" id="observacao" size="60" tabindex="5" required="true">
            </div>
          </div>
    		<!-- ********************************************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
		         <td colspan="4" align="center"><hr align="center" width="600" size="1" color=red></td>
		      </div>
		    <!-- ********************************************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
		        <input type="submit" size="150" value="REGISTRAR">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		        <input type="reset" value="LIMPA" /></td> 
		       </div>  
    </form></font>
    
    <?/*
      include "conexao.php";
      $dataH = date('Y/m/d');
      
      $mes = date('m'); 
      
      $sql3 = "SELECT sum(valor) AS val3 FROM financeiroentrada WHERE  month(data) = '$mes'";
      $resultado3 = mysqli_query($conn,$sql3) or die (mysql_error());
      while ($linha3 = mysqli_fetch_array($resultado3)) {
             $entrada1 = $linha3['val3'];}
             $entrada = number_format($entrada1, 2, ',', '.'); //str_replace('.',',',str_replace(',','.',$ent_deb));       
      
      $sql4 = "SELECT sum(valor) AS val4 FROM financeirosaida WHERE month(data) = '$mes'";
      $resultado4 = mysqli_query($conn,$sql4) or die (mysql_error());
      while ($linha4 = mysqli_fetch_array($resultado4)) {
             $saida1 = $linha4['val4'];}
             $saida = number_format($saida1, 2, ',', '.');
      //$saidasT = $saida+$sangra;
      //$saldo = $ent_din-$saidasT;
      //$saidas2 = number_format($saidasT, 2, ',', '.');
      //$saldo2 = number_format($saldo, 2, ',', '.');

      //$ent_tot = ($ent_din + $ent_cre + $ent_deb);
      //$ent_tot = number_format($ent_tot, 2, ',', '.');  

      //if($saldo > 0) $cor = "color='blue'"; else $cor = "color='red'";
      echo "FINANCEIRO: Entradas: Créditos:<font color='blue'>R$ ".$ent_credito."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saques:<font color='blue'>R$ ".$ent_sac."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENTRADA TOTAL:<font color='blue'>R$  ".$ent_tot;
      echo "<br />";  
      echo "Saídas: <font color='red'>R$ ".$saida."</font>";
    
    
        $sql = "SELECT sum(valor) as val FROM caixaSaida where data = '$ontem'";
        $result = mysqli_query($conn,$sql) or die (mysql_error());
        while ($linha = mysqli_fetch_array($result)) {
             $saidont = $linha['val'];}

        $sql = "SELECT sum(valor) as san FROM sangria where dataCaixa = '$ontem'";
        $result = mysqli_query($conn,$sql) or die (mysql_error());
        while ($linha = mysqli_fetch_array($result)) {
             $saiSanOnt = $linha['san'];}

        $sql = "SELECT valor FROM caixasaldo where data = '$ontem' AND status=0";
        $result = mysqli_query($conn,$sql) or die (mysql_error());
        while ($linha = mysqli_fetch_array($result)) {     
              $salOnt = $linha['valor'];}

        $saldo_onten2 = number_format($salOnt, 2, ',', '.');      
        
        //$sqlOnt = "UPDATE caixasaldo SET valor='$salOnt', status=1 where data='$dataH'";
        //$resultOnt = @mysqli_query($conn,$sqlOnt);     
        
       // $sqlOnt = "UPDATE caixasaldo SET status=1 where data='$ontem'";
        //$resultOnt = @mysqli_query($conn,$sqlOnt); 
            
          
      
     //***************************************************************************************************************************
     /*
      $sql = "SELECT saida FROM caixaSaldo WHERE data = '$ontem'";
      $resultado = mysqli_query($conn,$sql) or die (mysql_error());
      while ($linha = mysqli_fetch_array($resultado)) {
             $saiOntem = $linha['saida'];}

      $sql = "SELECT sangria FROM caixaSaldo WHERE data = '$ontem'";
      $resultado = mysqli_query($conn,$sql) or die (mysql_error());
      while ($linha = mysqli_fetch_array($resultado)) {
             $sangOntem = $linha['sangria']; }

      $sql = "SELECT dinheiro FROM caixaSaldo WHERE data = '$ontem'";
      $resultado = mysqli_query($conn,$sql) or die (mysql_error());
      while ($linha = mysqli_fetch_array($resultado)) {
             $dinOntem = $linha['dinheiro']; }

      $sql = "SELECT valor FROM caixaSaldo WHERE data = '$ontem'";
      $resultado = mysqli_query($conn,$sql) or die (mysql_error());
      while ($linha = mysqli_fetch_array($resultado)) {
             $saldoOntem = $linha['valor']; }              

         $saldo_onten = $dinOntem-($saiOntem + $sangOntem)+$saldoOntem;      
         $saldo_onten2 = number_format($saldo_onten, 2, ',', '.'); 

      echo $dinOntem." ".$saiOntem." ".$sangOntem." ".$saldo_onten; 
      //***************************************************************************************************************************
    
      $sql = "SELECT sum(valor) as val FROM caixa where data = '$dataH' and boleto = 'Dinheiro'";
      $resultado = mysqli_query($conn,$sql) or die (mysql_error());
      while ($linha = mysqli_fetch_array($resultado)) {
             $ent_din = $linha['val'];}
            // $ent_din = $ent_din + $_SESSION['sald'];
             $ent_din2 = number_format($ent_din, 2, ',', '.'); // str_replace('.',',',str_replace(',','.',$ent_din));
      
      $sql2 = "SELECT sum(valor) as val2 FROM caixa where data = '$dataH' and boleto = 'Crédito'";
      $resultado2 = mysqli_query($conn,$sql2) or die (mysql_error());
      while ($linha2 = mysqli_fetch_array($resultado2)) {
             $ent_cre = $linha2['val2'];}
             $ent_cre2 = number_format($ent_cre, 2, ',', '.'); //str_replace('.',',',str_replace(',','.',$ent_cre));
      
      $sql3 = "SELECT sum(valor) as val3 FROM caixa where data = '$dataH' and boleto = 'Débito'";
      $resultado3 = mysqli_query($conn,$sql3) or die (mysql_error());
      while ($linha3 = mysqli_fetch_array($resultado3)) {
             $ent_deb = $linha3['val3'];}
             $ent_deb2 = number_format($ent_deb, 2, ',', '.'); //str_replace('.',',',str_replace(',','.',$ent_deb));       
      
      $sql4 = "SELECT sum(valor) as val4 FROM caixasaida where data = '$dataH'";
      $resultado4 = mysqli_query($conn,$sql4) or die (mysql_error());
      while ($linha4 = mysqli_fetch_array($resultado4)) {
             $saidas = $linha4['val4'];}
      
      $sql5 = "SELECT sum(valor) as val5 FROM sangria where dataCaixa = '$dataH'";
      $resultado5 = mysqli_query($conn,$sql5) or die (mysql_error());
      while ($linha5 = mysqli_fetch_array($resultado5)) {
             $sangra = $linha5['val5'];}

        $sql = "SELECT valor FROM caixasaldo where data = '$ontem' AND status=1";
         $result = mysqli_query($conn,$sql) or die (mysql_error());
         while ($linha = mysqli_fetch_array($result)) {
             $salOnt = $linha['valor']; } 


      
      $saidasT = $saidas+$sangra;
      $saldo = $ent_din+$salOnt-$saidasT; //$ent_din-$saidasT;
      $saldo1 = $ent_din-$saidasT;
      $saidas2 = number_format($saidasT, 2, ',', '.');
      $saldo2 = number_format($saldo, 2, ',', '.');
      $saldo1 = number_format($saldo1, 2, ',', '.');

      $ent_tot = ($ent_din + $ent_cre + $ent_deb);
      $ent_tot2 = number_format($ent_tot, 2, ',', '.');  

      if($saldo > 0) $cor = "color='blue'"; else $cor = "color='red'";
      echo "CAIXA: Entradas: Dinheiro:<font color='blue'>R$ ".$ent_din2."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Débito:<font color='blue'>R$ ".$ent_deb2."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crédito:<font color='blue'>R$ ".$ent_cre2."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENTRADA TOTAL:<font color='blue'>R$  ".$ent_tot2;
      echo "<br />";  
      echo "Saldo dia anterior: <font color='red'>R$ ".$salOnt."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saídas: <font color='red'>R$ ".$saidas2."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saldo hoje: <font $cor>R$ ".$saldo1."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saldo em dinheiro: <font $cor>R$ ".$saldo2."</font>";
  
   //$sql = "UPDATE caixasaldo SET dinheiro='$ent_din', debito='$ent_deb', credito='$ent_cre', total='$ent_tot', valor='$saldo' where data='$dataH'";
    //$result = @mysqli_query($conn,$sql);
      
  */
   ?>
   <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="button" onClick="window.open('cadSaldo.php?sa=<? //echo $saldo; ?>')" value="TRANSFERIR SALDO">-->
  
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
          // Variáveis da função
          var txt  = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
          var mask = (!r) ? m : m.reverse();
          var pre  = (a ) ? a.pre : "";
          var pos  = (a ) ? a.pos : "";
          var ret  = "";
          if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;
          // Loop na máscara para aplicar os caracteres
          for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
          if(mask.charAt(x)!='#'){
          ret += mask.charAt(x); x++; } 
          else {
          ret += txt.charAt(y); y++; x++; } }
          // Retorno da função
          ret = (!r) ? ret : ret.reverse()  
          w.value = pre+ret+pos; }
          // Novo método para o objeto 'String'
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