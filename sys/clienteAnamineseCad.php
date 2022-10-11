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
      <title>ANAMINESE</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css?v=12">
       <script src="js/navbar.js"></script>
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
  <body class="main-layout">
      <header>
            <?php  include ('menu.php'); ?>
      </header>
    <br /><br /><br /><br />

  <div class="container">
    
    <?php  if(!isset($_POST['cliente'])){  ?>
    <font class="text-primary" face="Verdana" size="10px">Anaminese</font>
    <font class="text-info" face="Verdana" size="3px">      
    <form name='form1' action='<? $myself ?>' method='post'>
        <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-dark" for="nome"><b>Cliente:</b></label>
            <div class="col-md-6">
              <select class="form-control" name="cliente" id="cliente" onchange="this.form.submit()" tabindex="1" required="true">
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
      </form></font>
    <?php
      } 
      if(isset($_POST['cliente'])){  ?>
      <font class="text-primary" face="Verdana" size="5px"><b>Anaminese de <? echo $_POST['cliente']; ?></b></font>
      <font class="text-dark" face="Verdana" size="3px">
      <form name="form1" method="post" action="clienteAnamineseCadOK.php" >
        <!-- ******************************************************************************************* -->
         <div class="form-group row mt-2 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="datacadA"><b>Data da Anaminese:</b></label>
            <div class="col-md-3">
              <input type="date" class="form-control" name="datacad" id="datacad" tabindex="-1" value="<?php echo date('Y-m-d',strtotime($hoje));?>">
            </div>
          </div>
      <!-- **************************************************************************************** -->
           <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="queixa"><b>Queixa principal:</b></label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="Queixa" id="Queixa" size="50" >
            </div>
          </div>
        <!-- **************************************************************************************** -->  
          <td colspan="4" align="center"><hr align="center"  size="2" color=red></td>
        
        
             <font class="text-primary text-center"  face="Verdana" size="5px"><b>HÁBITOS DIÁRIOS</b></font><br />
             <td colspan="4" align="center"><hr align="center"  size="2" color=red></td>
       
        
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="restet"><b>Trat. estético anterior?:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="tratestetico" VALUE="Sim" onClick="MudarestadoOn('tratAnterior')"> Sim
                <input TYPE="RADIO" NAME="tratestetico" VALUE="Não" onClick="MudarestadoOff('tratAnterior')"> Não
                <input type="text" name="tratAnterior" id="tratAnterior" size="50" placeholder="Qual?">
              </div>
          </div>
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="lente"><b>Usa lentes de contato?:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="lentes" VALUE="Sim"> Sim
                <input TYPE="RADIO" NAME="lentes" VALUE="Não"> Não
              </div>
          </div>  
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="cosm"><b>Utiliza cosméticos?:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="cosmetico" VALUE="Sim" onClick="MudarestadoOn('UsaCosmetico')"> Sim
                <input TYPE="RADIO" NAME="cosmetico" VALUE="Não" onClick="MudarestadoOff('UsaCosmetico')"> Não
                <input type="text" name="UsaCosmetico" id="UsaCosmetico" size="50" placeholder="Qual?">
              </div>
          </div>  
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="sol"><b>Exposição ao sol:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="sol" VALUE="Sim"> Sim
                <input TYPE="RADIO" NAME="sol" VALUE="Não"> Não
              </div>
          </div> 
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="solar"><b>Filtro Solar:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="filtrosolar" VALUE="Sim" onClick="MudarestadoOn('freqFiltroSolar')"> Sim
                <input TYPE="RADIO" NAME="filtrosolar" VALUE="Não" onClick="MudarestadoOff('freqFiltroSolar')"> Não
                <input type="text" name="freqFiltroSolar" id="freqFiltroSolar" size="50" placeholder="Frequência?">
              </div>
          </div>
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="cigarro"><b>Tabagismo:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="tabagismo" VALUE="Sim" onClick="MudarestadoOn('quantcigarro')"> Sim
                <input TYPE="RADIO" NAME="tabagismo" VALUE="Não" onClick="MudarestadoOff('quantcigarro')"> Não
                <input type="text" name="quantcigarro" id="quantcigarro" size="50" placeholder="Cigarros por dia?">
              </div>
          </div>
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="alcool"><b>Bebida alcoólica:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="alcolica" VALUE="Sim" onClick="MudarestadoOn('bebidalcolica')"> Sim
                <input TYPE="RADIO" NAME="alcolica" VALUE="Não" onClick="MudarestadoOff('bebidalcolica')"> Não
                <input type="text" name="bebidalcolica" id="bebidalcolica" size="50" placeholder="Frequência">
              </div>
          </div>
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="inte"><b>Funcionamento intestinal:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="intestino" VALUE="2xmes"> 1 x por semana |
                <input TYPE="RADIO" NAME="intestino" VALUE="1a2psemana"> 1 a 2 x por semana |
                <input TYPE="RADIO" NAME="intestino" VALUE="1a2pdia"> 1 a 2 x por dia |
                <input TYPE="RADIO" NAME="intestino" VALUE="m3pdia"> mais de 3 x por dia 
              </div>
          </div>
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="sono"><b>Qualidade do sono:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="sono" VALUE="Boa"> Boa
                <input TYPE="RADIO" NAME="sono" VALUE="Regular"> Regular
                <input TYPE="RADIO" NAME="sono" VALUE="Ruim"> Ruim
                <input type="text" name="hoasono" id="hoasono" size="20" placeholder="Horas por dia">
              </div>
          </div>
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="aconc"><b>Utiliza anticoncepcional:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="anticoncepcional" VALUE="Sim" onClick="MudarestadoOn('anticonc')"> Sim
                <input TYPE="RADIO" NAME="anticoncepcional" VALUE="Não" onClick="MudarestadoOff('anticonc')"> Não
                <input type="text" name="anticonc" id="anticonc" size="50" placeholder="Qual?">
              </div>
          </div>

          <!-- **************************************************************************************** -->
           <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="agua"><b>Ingestão de água:</b></label>
            <div class="col-md-2">
              <input type="text" class="form-control" name="agua" id="agua" placeholder="Copos por dia">
            </div>
          </div>
          <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="alime"><b>Alimentação:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="alimentacao" VALUE="Boa"> Boa
                <input TYPE="RADIO" NAME="alimentacao" VALUE="Regular"> Regular
                <input TYPE="RADIO" NAME="alimentacao" VALUE="Pessima"> Péssima
              </div>
          </div>
         <!-- **************************************************************************************** -->
           <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="alim"><b>Alimento de preferência:</b></label>
            <div class="col-md-4">
              <input type="text" class="form-control" name="alimento" id="alimento" >
            </div>
          </div>
          <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="fisica"><b>Atividade física:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="fisica" VALUE="Sim" onClick="MudarestadoOn('fisic')"> Sim
                <input TYPE="RADIO" NAME="fisica" VALUE="Não" onClick="MudarestadoOff('fisic')"> Não
                <input type="text" name="fisic" id="fisic" size="50" placeholder="Que tipo e frequência?">
              </div>
          </div>
         <!-- ******************************************************************************************* -->
         <div class="form-group row mt-2 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="datamenstr"><b>Data do 1º dia da última menstruação:</b></label>
            <div class="col-md-3">
              <input type="date" class="form-control" name="datamenstr" id="datamenstr">
            </div>
          </div>
          <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="fisica"><b>Gestação:</b></label>
              <div class="col-md-8">
                <input TYPE="RADIO" NAME="gestacao" VALUE="Sim" onClick="MudarestadoOn('gestac')"> Sim
                <input TYPE="RADIO" NAME="gestacao" VALUE="Não" onClick="MudarestadoOff('gestac')"> Não
                <input type="text" name="gestac" id="gestac" size="50" placeholder="Quantas e há quanto tempo?">
              </div>
          </div> 
        <!-- **************************************************************************************** -->  
          <td colspan="4" align="center"><hr align="center" width="600" size="1" color=red></td>
        
        
             <font class="text-primary text-center"  face="Verdana" size="5px"><b>HISTÓRICO FAMILIAR</b></font><br />
             <td colspan="4" align="center"><hr align="center" width="600" size="1" color=red></td>
        
        <!-- **************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-3 col-form-label text-dark" for="doenca"><b>Doenças:</b></label>
              <div class="col-md-8">
                <input TYPE="checkbox" NAME="doenca1" VALUE="hipertensao"> Hipertensão
                <input TYPE="checkbox" NAME="doenca2" VALUE="diabetes"> Diabetes
                <input TYPE="checkbox" NAME="doenca3" VALUE="cancer"> Câncer
                <input TYPE="checkbox" NAME="doenca4" VALUE="trombose"> Trombose
                <input type="text" class="form-control" name="obsdoenca" id="obsdoenca" placeholder="Outras informações?">
              </div>
          </div>      
		    <!-- **************************************************************************************** -->  
          <td colspan="4" align="center"><hr align="center" width="600" size="1" color=red></td>
        
        
             <font class="text-primary text-center"  face="Verdana" size="5px"><b>HISTÓRICO CLÍNICO</b></font><br />
             <td colspan="4" align="center"><hr align="center" width="600" size="1" color=red></td>
        <!-- ******************************************************************************* -->
           <div class="form-group row mt-1 mb-1">
		        <input type="submit" size="150" value="REGISTRAR">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		        <input type="reset" value="LIMPA" /></td> 
		       </div>  
      </form></font>
    <?  }  ?>

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
      <script src="js/navbar.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         
       document.getElementById('tratAnterior').style.display = 'none';

       document.getElementById('UsaCosmetico').style.display = 'none';

       document.getElementById('freqFiltroSolar').style.display = 'none';

       document.getElementById('quantcigarro').style.display = 'none';

       document.getElementById('bebidalcolica').style.display = 'none';

       document.getElementById('quantcigarro').style.display = 'none';

       document.getElementById('bebidalcolica').style.display = 'none';

       document.getElementById('anticonc').style.display = 'none';

       document.getElementById('fisic').style.display = 'none';

       document.getElementById('gestac').style.display = 'none';
      

      function MudarestadoOn(el) {
          var display = document.getElementById(el).style.display;
             document.getElementById(el).style.display = 'block';
        }
        function MudarestadoOff(el) {
          var display = document.getElementById(el).style.display;
             document.getElementById(el).style.display = 'none';
        }
                       
  //***************************************************************************        
        (function($){
          $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');

            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
            });

            return false;
          });
        })(jQuery)

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